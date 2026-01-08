<?php
namespace AWS\ConnectWisdomService;

class ConnectWisdomServiceClient
{
    /**
     * @param array{clientToken?:string, description?:string, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, tags?:array<string, string>, type:"AGENT"} $args
     * @return \AWS\Result<array{assistant?:array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function createAssistant(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, tags?:array<string, string>, type:"AGENT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistant?:array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function createAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, association:array{knowledgeBaseId?:string}, associationType:"KNOWLEDGE_BASE", clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function createAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, association:array{knowledgeBaseId?:string}, associationType:"KNOWLEDGE_BASE", clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function createAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, knowledgeBaseId:string, metadata?:array<string, string>, name:string, overrideLinkOutUri?:string, tags?:array<string, string>, title?:string, uploadId:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createContent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, knowledgeBaseId:string, metadata?:array<string, string>, name:string, overrideLinkOutUri?:string, tags?:array<string, string>, title?:string, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function createKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function createKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channels?:array<string>, clientToken?:string, content:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name:string, shortcutKey?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function createQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{channels?:array<string>, clientToken?:string, content:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name:string, shortcutKey?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function createQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, clientToken?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{session?:array{description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tags?:array<string, string>}}>
     */
    public function createSession(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, clientToken?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tags?:array<string, string>}}>
     */
    public function createSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteImportJob(array $args): \AWS\Result { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string} $args
     * @return \AWS\Result<array{assistant?:array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function getAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistant?:array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function getAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \AWS\Result<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function getAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function getAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{contentSummary?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}}>
     */
    public function getContentSummary(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummary?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}}>
     */
    public function getContentSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getImportJob(array $args): \AWS\Result { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function getKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function getKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function getQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function getQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, sessionId:string, waitTimeSeconds?:int} $args
     * @return \AWS\Result<array{recommendations:array<array{document:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, recommendationId:string, relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float, type?:"KNOWLEDGE_CONTENT"}>, triggers?:array<array{data:array{query?:array{text?:string}}, id:string, recommendationIds:array<string>, source:"ISSUE_DETECTION"|"RULE_EVALUATION"|"OTHER", type:"QUERY"}>}>
     */
    public function getRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, sessionId:string, waitTimeSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommendations:array<array{document:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, recommendationId:string, relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float, type?:"KNOWLEDGE_CONTENT"}>, triggers?:array<array{data:array{query?:array{text?:string}}, id:string, recommendationIds:array<string>, source:"ISSUE_DETECTION"|"RULE_EVALUATION"|"OTHER", type:"QUERY"}>}>
     */
    public function getRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, sessionId:string} $args
     * @return \AWS\Result<array{session?:array{description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tags?:array<string, string>}}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tags?:array<string, string>}}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{assistantAssociationSummaries:array<array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listAssistantAssociations(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociationSummaries:array<array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listAssistantAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{assistantSummaries:array<array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}>, nextToken?:string}>
     */
    public function listAssistants(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantSummaries:array<array{assistantArn:string, assistantId:string, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}>, nextToken?:string}>
     */
    public function listAssistantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function listContents(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function listContentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{importJobSummaries:array<array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string}>, nextToken?:string}>
     */
    public function listImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJobSummaries:array<array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string}>, nextToken?:string}>
     */
    public function listImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{knowledgeBaseSummaries:array<array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listKnowledgeBases(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBaseSummaries:array<array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listKnowledgeBasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, quickResponseSummaries:array<array{channels?:array<string>, contentType:string, createdTime:int|string|\DateTimeInterface, description?:string, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listQuickResponses(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, quickResponseSummaries:array<array{channels?:array<string>, contentType:string, createdTime:int|string|\DateTimeInterface, description?:string, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listQuickResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{assistantId:string, recommendationIds:array<string>, sessionId:string} $args
     * @return \AWS\Result<array{errors?:array<array{message?:string, recommendationId?:string}>, recommendationIds?:array<string>}>
     */
    public function notifyRecommendationsReceived(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, recommendationIds:array<string>, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{message?:string, recommendationId?:string}>, recommendationIds?:array<string>}>
     */
    public function notifyRecommendationsReceivedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, queryText:string} $args
     * @return \AWS\Result<array{nextToken?:string, results:array<array{document:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, relevanceScore?:float, resultId:string}>}>
     */
    public function queryAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, queryText:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, results:array<array{document:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, relevanceScore?:float, resultId:string}>}>
     */
    public function queryAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeKnowledgeBaseTemplateUri(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeKnowledgeBaseTemplateUriAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \AWS\Result<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function searchContent(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function searchContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributes?:array<string, string>, knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \AWS\Result<array{nextToken?:string, results:array<array{attributesInterpolated?:array<string>, attributesNotInterpolated?:array<string>, channels?:array<string>, contentType:string, contents:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function searchQuickResponses(array $args): \AWS\Result { }

    /**
     * @param array{attributes?:array<string, string>, knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, results:array<array{attributesInterpolated?:array<string>, attributesNotInterpolated?:array<string>, channels?:array<string>, contentType:string, contents:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function searchQuickResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \AWS\Result<array{nextToken?:string, sessionSummaries:array<array{assistantArn:string, assistantId:string, sessionArn:string, sessionId:string}>}>
     */
    public function searchSessions(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sessionSummaries:array<array{assistantArn:string, assistantId:string, sessionArn:string, sessionId:string}>}>
     */
    public function searchSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType:string, knowledgeBaseId:string, presignedUrlTimeToLive?:int} $args
     * @return \AWS\Result<array{headersToInclude:array<string, string>, uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}>
     */
    public function startContentUpload(array $args): \AWS\Result { }

    /**
     * @param array{contentType:string, knowledgeBaseId:string, presignedUrlTimeToLive?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{headersToInclude:array<string, string>, uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}>
     */
    public function startContentUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobType:"QUICK_RESPONSES", knowledgeBaseId:string, metadata?:array<string, string>, uploadId:string} $args
     * @return \AWS\Result<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function startImportJob(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobType:"QUICK_RESPONSES", knowledgeBaseId:string, metadata?:array<string, string>, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function startImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{contentId:string, knowledgeBaseId:string, metadata?:array<string, string>, overrideLinkOutUri?:string, removeOverrideLinkOutUri?:bool, revisionId?:string, title?:string, uploadId?:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function updateContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string, metadata?:array<string, string>, overrideLinkOutUri?:string, removeOverrideLinkOutUri?:bool, revisionId?:string, title?:string, uploadId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function updateContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, templateUri:string} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function updateKnowledgeBaseTemplateUri(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, templateUri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>}}>
     */
    public function updateKnowledgeBaseTemplateUriAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channels?:array<string>, content?:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name?:string, quickResponseId:string, removeDescription?:bool, removeGroupingConfiguration?:bool, removeShortcutKey?:bool, shortcutKey?:string} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function updateQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{channels?:array<string>, content?:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name?:string, quickResponseId:string, removeDescription?:bool, removeGroupingConfiguration?:bool, removeShortcutKey?:bool, shortcutKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function updateQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
