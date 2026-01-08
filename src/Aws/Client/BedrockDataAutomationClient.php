<?php
namespace AWS\BedrockDataAutomation;

class BedrockDataAutomationClient
{
    /**
     * @param array{blueprintName:string, type:"DOCUMENT"|"IMAGE", blueprintStage?:"DEVELOPMENT"|"LIVE", schema:string, clientToken?:string, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}} $args
     * @return \AWS\Result<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function createBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{blueprintName:string, type:"DOCUMENT"|"IMAGE", blueprintStage?:"DEVELOPMENT"|"LIVE", schema:string, clientToken?:string, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function createBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blueprintArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function createBlueprintVersion(array $args): \AWS\Result { }

    /**
     * @param array{blueprintArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function createBlueprintVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectName:string, projectDescription?:string, projectStage?:"DEVELOPMENT"|"LIVE", standardOutputConfiguration:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}, clientToken?:string, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}} $args
     * @return \AWS\Result<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function createDataAutomationProject(array $args): \AWS\Result { }

    /**
     * @param array{projectName:string, projectDescription?:string, projectStage?:"DEVELOPMENT"|"LIVE", standardOutputConfiguration:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}, clientToken?:string, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function createDataAutomationProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blueprintArn:string, blueprintVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{blueprintArn:string, blueprintVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string} $args
     * @return \AWS\Result<array{projectArn:string, status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function deleteDataAutomationProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectArn:string, status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function deleteDataAutomationProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function getBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function getBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{project:array{projectArn:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, projectName:string, projectStage?:"DEVELOPMENT"|"LIVE", projectDescription?:string, standardOutputConfiguration?:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}, status:"COMPLETED"|"IN_PROGRESS"|"FAILED", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function getDataAutomationProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{project:array{projectArn:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, projectName:string, projectStage?:"DEVELOPMENT"|"LIVE", projectDescription?:string, standardOutputConfiguration?:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}, status:"COMPLETED"|"IN_PROGRESS"|"FAILED", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function getDataAutomationProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blueprintArn?:string, resourceOwner?:"SERVICE"|"ACCOUNT", blueprintStageFilter?:"DEVELOPMENT"|"LIVE"|"ALL", maxResults?:int, nextToken?:string, projectFilter?:array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE"}} $args
     * @return \AWS\Result<array{blueprints:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", blueprintName?:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listBlueprints(array $args = []): \AWS\Result { }

    /**
     * @param array{blueprintArn?:string, resourceOwner?:"SERVICE"|"ACCOUNT", blueprintStageFilter?:"DEVELOPMENT"|"LIVE"|"ALL", maxResults?:int, nextToken?:string, projectFilter?:array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{blueprints:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", blueprintName?:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listBlueprintsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, projectStageFilter?:"DEVELOPMENT"|"LIVE"|"ALL", blueprintFilter?:array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}, resourceOwner?:"SERVICE"|"ACCOUNT"} $args
     * @return \AWS\Result<array{projects:array<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", projectName?:string, creationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataAutomationProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, projectStageFilter?:"DEVELOPMENT"|"LIVE"|"ALL", blueprintFilter?:array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}, resourceOwner?:"SERVICE"|"ACCOUNT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{projects:array<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", projectName?:string, creationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataAutomationProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blueprintArn:string, schema:string, blueprintStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function updateBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{blueprintArn:string, schema:string, blueprintStage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{blueprint:array{blueprintArn:string, schema:string, type:"DOCUMENT"|"IMAGE", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, blueprintName:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE", kmsKeyId?:string, kmsEncryptionContext?:array<string, string>}}>
     */
    public function updateBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", projectDescription?:string, standardOutputConfiguration:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}} $args
     * @return \AWS\Result<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function updateDataAutomationProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", projectDescription?:string, standardOutputConfiguration:array{document?:array{extraction?:array{granularity:array{types?:array<"DOCUMENT"|"PAGE"|"ELEMENT"|"WORD"|"LINE">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED"}, outputFormat?:array{textFormat:array{types?:array<"PLAIN_TEXT"|"MARKDOWN"|"HTML"|"CSV">}, additionalFileFormat:array{state:"ENABLED"|"DISABLED"}}}, image?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"IMAGE_SUMMARY"|"IAB">}}, video?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"CONTENT_MODERATION"|"TEXT_DETECTION"|"TRANSCRIPT">}, boundingBox:array{state:"ENABLED"|"DISABLED"}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"VIDEO_SUMMARY"|"SCENE_SUMMARY"|"IAB">}}, audio?:array{extraction?:array{category:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_CONTENT_MODERATION"|"CHAPTER_CONTENT_MODERATION"|"TRANSCRIPT">}}, generativeField?:array{state:"ENABLED"|"DISABLED", types?:array<"AUDIO_SUMMARY"|"CHAPTER_SUMMARY"|"IAB">}}}, customOutputConfiguration?:array{blueprints?:array<array{blueprintArn:string, blueprintVersion?:string, blueprintStage?:"DEVELOPMENT"|"LIVE"}>}, overrideConfiguration?:array{document?:array{splitter?:array{state?:"ENABLED"|"DISABLED"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectArn:string, projectStage?:"DEVELOPMENT"|"LIVE", status?:"COMPLETED"|"IN_PROGRESS"|"FAILED"}>
     */
    public function updateDataAutomationProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
