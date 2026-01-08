<?php
namespace AWS\LexModelBuildingService;

class LexModelBuildingServiceClient
{
    /**
     * @param array{name:string, checksum?:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, enableModelImprovements?:bool, detectSentiment?:bool}>
     */
    public function createBotVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, checksum?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, enableModelImprovements?:bool, detectSentiment?:bool}>
     */
    public function createBotVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, checksum?:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function createIntentVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, checksum?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function createIntentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, checksum?:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function createSlotTypeVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, checksum?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function createSlotTypeVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBot(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, botName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBotAlias(array $args): \AWS\Result { }

    /**
     * @param array{name:string, botName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBotAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, botName:string, botAlias:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBotChannelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{name:string, botName:string, botAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBotChannelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBotVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBotVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntent(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntentVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSlotType(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSlotTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSlotTypeVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSlotTypeVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, userId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUtterances(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, userId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUtterancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, versionOrAlias:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, detectSentiment?:bool}>
     */
    public function getBot(array $args): \AWS\Result { }

    /**
     * @param array{name:string, versionOrAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, detectSentiment?:bool}>
     */
    public function getBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, botName:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}}>
     */
    public function getBotAlias(array $args): \AWS\Result { }

    /**
     * @param array{name:string, botName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}}>
     */
    public function getBotAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \AWS\Result<array{BotAliases?:array<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}}>, nextToken?:string}>
     */
    public function getBotAliases(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BotAliases?:array<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}}>, nextToken?:string}>
     */
    public function getBotAliasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, botName:string, botAlias:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, botAlias?:string, botName?:string, createdDate?:int|string|\DateTimeInterface, type?:"Facebook"|"Slack"|"Twilio-Sms"|"Kik", botConfiguration?:array<string, string>, status?:"IN_PROGRESS"|"CREATED"|"FAILED", failureReason?:string}>
     */
    public function getBotChannelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{name:string, botName:string, botAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, botAlias?:string, botName?:string, createdDate?:int|string|\DateTimeInterface, type?:"Facebook"|"Slack"|"Twilio-Sms"|"Kik", botConfiguration?:array<string, string>, status?:"IN_PROGRESS"|"CREATED"|"FAILED", failureReason?:string}>
     */
    public function getBotChannelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botAlias:string, nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \AWS\Result<array{botChannelAssociations?:array<array{name?:string, description?:string, botAlias?:string, botName?:string, createdDate?:int|string|\DateTimeInterface, type?:"Facebook"|"Slack"|"Twilio-Sms"|"Kik", botConfiguration?:array<string, string>, status?:"IN_PROGRESS"|"CREATED"|"FAILED", failureReason?:string}>, nextToken?:string}>
     */
    public function getBotChannelAssociations(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{botChannelAssociations?:array<array{name?:string, description?:string, botAlias?:string, botName?:string, createdDate?:int|string|\DateTimeInterface, type?:"Facebook"|"Slack"|"Twilio-Sms"|"Kik", botConfiguration?:array<string, string>, status?:"IN_PROGRESS"|"CREATED"|"FAILED", failureReason?:string}>, nextToken?:string}>
     */
    public function getBotChannelAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{bots?:array<array{name?:string, description?:string, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getBotVersions(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{bots?:array<array{name?:string, description?:string, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getBotVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \AWS\Result<array{bots?:array<array{name?:string, description?:string, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getBots(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{bots?:array<array{name?:string, description?:string, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getBotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{signature:string} $args
     * @return \AWS\Result<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">, slots?:array<array{name?:string}>}>
     */
    public function getBuiltinIntent(array $args): \AWS\Result { }

    /**
     * @param array{signature:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">, slots?:array<array{name?:string}>}>
     */
    public function getBuiltinIntentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", signatureContains?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{intents?:array<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">}>, nextToken?:string}>
     */
    public function getBuiltinIntents(array $args = []): \AWS\Result { }

    /**
     * @param array{locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", signatureContains?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{intents?:array<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">}>, nextToken?:string}>
     */
    public function getBuiltinIntentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", signatureContains?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{slotTypes?:array<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">}>, nextToken?:string}>
     */
    public function getBuiltinSlotTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", signatureContains?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{slotTypes?:array<array{signature?:string, supportedLocales?:array<"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR">}>, nextToken?:string}>
     */
    public function getBuiltinSlotTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string, resourceType:"BOT"|"INTENT"|"SLOT_TYPE", exportType:"ALEXA_SKILLS_KIT"|"LEX"} $args
     * @return \AWS\Result<array{name?:string, version?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", exportType?:"ALEXA_SKILLS_KIT"|"LEX", exportStatus?:"IN_PROGRESS"|"READY"|"FAILED", failureReason?:string, url?:string}>
     */
    public function getExport(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string, resourceType:"BOT"|"INTENT"|"SLOT_TYPE", exportType:"ALEXA_SKILLS_KIT"|"LEX"} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, version?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", exportType?:"ALEXA_SKILLS_KIT"|"LEX", exportStatus?:"IN_PROGRESS"|"READY"|"FAILED", failureReason?:string, url?:string}>
     */
    public function getExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importId:string} $args
     * @return \AWS\Result<array{name?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy?:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", importId?:string, importStatus?:"IN_PROGRESS"|"COMPLETE"|"FAILED", failureReason?:array<string>, createdDate?:int|string|\DateTimeInterface}>
     */
    public function getImport(array $args): \AWS\Result { }

    /**
     * @param array{importId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy?:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", importId?:string, importStatus?:"IN_PROGRESS"|"COMPLETE"|"FAILED", failureReason?:array<string>, createdDate?:int|string|\DateTimeInterface}>
     */
    public function getImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function getIntent(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function getIntentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{intents?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getIntentVersions(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{intents?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getIntentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \AWS\Result<array{intents?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getIntents(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{intents?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getIntentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{migrationId:string} $args
     * @return \AWS\Result<array{migrationId?:string, v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED", migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface, alerts?:array<array{type?:"ERROR"|"WARN", message?:string, details?:array<string>, referenceURLs?:array<string>}>}>
     */
    public function getMigration(array $args): \AWS\Result { }

    /**
     * @param array{migrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{migrationId?:string, v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED", migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface, alerts?:array<array{type?:"ERROR"|"WARN", message?:string, details?:array<string>, referenceURLs?:array<string>}>}>
     */
    public function getMigrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sortByAttribute?:"V1_BOT_NAME"|"MIGRATION_DATE_TIME", sortByOrder?:"ASCENDING"|"DESCENDING", v1BotNameContains?:string, migrationStatusEquals?:"IN_PROGRESS"|"COMPLETED"|"FAILED", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{migrationSummaries?:array<array{migrationId?:string, v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED", migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getMigrations(array $args = []): \AWS\Result { }

    /**
     * @param array{sortByAttribute?:"V1_BOT_NAME"|"MIGRATION_DATE_TIME", sortByOrder?:"ASCENDING"|"DESCENDING", v1BotNameContains?:string, migrationStatusEquals?:"IN_PROGRESS"|"COMPLETED"|"FAILED", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{migrationSummaries?:array<array{migrationId?:string, v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED", migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getMigrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string} $args
     * @return \AWS\Result<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function getSlotType(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function getSlotTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{slotTypes?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getSlotTypeVersions(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{slotTypes?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getSlotTypeVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \AWS\Result<array{slotTypes?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getSlotTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, nameContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{slotTypes?:array<array{name?:string, description?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string}>, nextToken?:string}>
     */
    public function getSlotTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botVersions:array<string>, statusType:"Detected"|"Missed"} $args
     * @return \AWS\Result<array{botName?:string, utterances?:array<array{botVersion?:string, utterances?:mixed}>}>
     */
    public function getUtterancesView(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botVersions:array<string>, statusType:"Detected"|"Missed"} $args
     * @return \GuzzleHttp\Promise\Promise<array{botName?:string, utterances?:array<array{botVersion?:string, utterances?:mixed}>}>
     */
    public function getUtterancesViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, processBehavior?:"SAVE"|"BUILD", locale:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected:bool, detectSentiment?:bool, createVersion?:bool, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, createVersion?:bool, detectSentiment?:bool, tags?:array<array{key:string, value:string}>}>
     */
    public function putBot(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, processBehavior?:"SAVE"|"BUILD", locale:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected:bool, detectSentiment?:bool, createVersion?:bool, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, intents?:array<array{intentName:string, intentVersion:string}>, enableModelImprovements?:bool, nluIntentConfidenceThreshold?:float, clarificationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, abortStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, status?:"BUILDING"|"READY"|"READY_BASIC_TESTING"|"FAILED"|"NOT_BUILT", failureReason?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, idleSessionTTLInSeconds?:int, voiceId?:string, checksum?:string, version?:string, locale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", childDirected?:bool, createVersion?:bool, detectSentiment?:bool, tags?:array<array{key:string, value:string}>}>
     */
    public function putBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, botVersion:string, botName:string, checksum?:string, conversationLogs?:array{logSettings:array<array{logType:"AUDIO"|"TEXT", destination:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn:string}>, iamRoleArn:string}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}, tags?:array<array{key:string, value:string}>}>
     */
    public function putBotAlias(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, botVersion:string, botName:string, checksum?:string, conversationLogs?:array{logSettings:array<array{logType:"AUDIO"|"TEXT", destination:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn:string}>, iamRoleArn:string}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, botVersion?:string, botName?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, checksum?:string, conversationLogs?:array{logSettings?:array<array{logType?:"AUDIO"|"TEXT", destination?:"CLOUDWATCH_LOGS"|"S3", kmsKeyArn?:string, resourceArn?:string, resourcePrefix?:string}>, iamRoleArn?:string}, tags?:array<array{key:string, value:string}>}>
     */
    public function putBotAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, checksum?:string, createVersion?:bool, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>} $args
     * @return \AWS\Result<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, createVersion?:bool, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function putIntent(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, checksum?:string, createVersion?:bool, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, slots?:array<array{name:string, description?:string, slotConstraint:"Required"|"Optional", slotType?:string, slotTypeVersion?:string, valueElicitationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, priority?:int, sampleUtterances?:array<string>, responseCard?:string, obfuscationSetting?:"NONE"|"DEFAULT_OBFUSCATION", defaultValueSpec?:array{defaultValueList:array<array{defaultValue:string}>}}>, sampleUtterances?:array<string>, confirmationPrompt?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, followUpPrompt?:array{prompt:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, maxAttempts:int, responseCard?:string}, rejectionStatement:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}}, conclusionStatement?:array{messages:array<array{contentType:"PlainText"|"SSML"|"CustomPayload", content:string, groupNumber?:int}>, responseCard?:string}, dialogCodeHook?:array{uri:string, messageVersion:string}, fulfillmentActivity?:array{type:"ReturnIntent"|"CodeHook", codeHook?:array{uri:string, messageVersion:string}}, parentIntentSignature?:string, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, createVersion?:bool, kendraConfiguration?:array{kendraIndex:string, queryFilterString?:string, role:string}, inputContexts?:array<array{name:string}>, outputContexts?:array<array{name:string, timeToLiveInSeconds:int, turnsToLive:int}>}>
     */
    public function putIntentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", createVersion?:bool, parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>} $args
     * @return \AWS\Result<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", createVersion?:bool, parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function putSlotType(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", createVersion?:bool, parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, description?:string, enumerationValues?:array<array{value:string, synonyms?:array<string>}>, lastUpdatedDate?:int|string|\DateTimeInterface, createdDate?:int|string|\DateTimeInterface, version?:string, checksum?:string, valueSelectionStrategy?:"ORIGINAL_VALUE"|"TOP_RESOLUTION", createVersion?:bool, parentSlotTypeSignature?:string, slotTypeConfigurations?:array<array{regexConfiguration?:array{pattern:string}}>}>
     */
    public function putSlotTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{payload:string|resource|\Psr\Http\Message\StreamInterface, resourceType:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{name?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy?:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", importId?:string, importStatus?:"IN_PROGRESS"|"COMPLETE"|"FAILED", tags?:array<array{key:string, value:string}>, createdDate?:int|string|\DateTimeInterface}>
     */
    public function startImport(array $args): \AWS\Result { }

    /**
     * @param array{payload:string|resource|\Psr\Http\Message\StreamInterface, resourceType:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, resourceType?:"BOT"|"INTENT"|"SLOT_TYPE", mergeStrategy?:"OVERWRITE_LATEST"|"FAIL_ON_CONFLICT", importId?:string, importStatus?:"IN_PROGRESS"|"COMPLETE"|"FAILED", tags?:array<array{key:string, value:string}>, createdDate?:int|string|\DateTimeInterface}>
     */
    public function startImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{v1BotName:string, v1BotVersion:string, v2BotName:string, v2BotRole:string, migrationStrategy:"CREATE_NEW"|"UPDATE_EXISTING"} $args
     * @return \AWS\Result<array{v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationId?:string, migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function startMigration(array $args): \AWS\Result { }

    /**
     * @param array{v1BotName:string, v1BotVersion:string, v2BotName:string, v2BotRole:string, migrationStrategy:"CREATE_NEW"|"UPDATE_EXISTING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{v1BotName?:string, v1BotVersion?:string, v1BotLocale?:"de-DE"|"en-AU"|"en-GB"|"en-IN"|"en-US"|"es-419"|"es-ES"|"es-US"|"fr-FR"|"fr-CA"|"it-IT"|"ja-JP"|"ko-KR", v2BotId?:string, v2BotRole?:string, migrationId?:string, migrationStrategy?:"CREATE_NEW"|"UPDATE_EXISTING", migrationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function startMigrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
}
