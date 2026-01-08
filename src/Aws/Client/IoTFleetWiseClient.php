<?php
namespace AWS\IoTFleetWise;

class IoTFleetWiseClient
{
    /**
     * @param array{vehicleName:string, fleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateVehicleFleet(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateVehicleFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicles:array<array{vehicleName:string, modelManifestArn:string, decoderManifestArn:string, attributes?:array<string, string>, associationBehavior?:"CreateIotThing"|"ValidateIotThingExists", tags?:array<array{Key:string, Value:string}>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>}>} $args
     * @return \AWS\Result<array{vehicles?:array<array{vehicleName?:string, arn?:string, thingArn?:string}>, errors?:array<array{vehicleName?:string, code?:string, message?:string}>}>
     */
    public function batchCreateVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicles:array<array{vehicleName:string, modelManifestArn:string, decoderManifestArn:string, attributes?:array<string, string>, associationBehavior?:"CreateIotThing"|"ValidateIotThingExists", tags?:array<array{Key:string, Value:string}>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicles?:array<array{vehicleName?:string, arn?:string, thingArn?:string}>, errors?:array<array{vehicleName?:string, code?:string, message?:string}>}>
     */
    public function batchCreateVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicles:array<array{vehicleName:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, attributeUpdateMode?:"Overwrite"|"Merge", stateTemplatesToAdd?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, stateTemplatesToRemove?:array<string>}>} $args
     * @return \AWS\Result<array{vehicles?:array<array{vehicleName?:string, arn?:string}>, errors?:array<array{vehicleName?:string, code?:int, message?:string}>}>
     */
    public function batchUpdateVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicles:array<array{vehicleName:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, attributeUpdateMode?:"Overwrite"|"Merge", stateTemplatesToAdd?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, stateTemplatesToRemove?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicles?:array<array{vehicleName?:string, arn?:string}>, errors?:array<array{vehicleName?:string, code?:int, message?:string}>}>
     */
    public function batchUpdateVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, signalCatalogArn:string, targetArn:string, startTime?:int|string|\DateTimeInterface, expiryTime?:int|string|\DateTimeInterface, postTriggerCollectionDuration?:int, diagnosticsMode?:"OFF"|"SEND_ACTIVE_DTCS", spoolingMode?:"OFF"|"TO_DISK", compression?:"OFF"|"SNAPPY", priority?:int, signalsToCollect?:array<array{name:string, maxSampleCount?:int, minimumSamplingIntervalMs?:int, dataPartitionId?:string}>, collectionScheme:array{timeBasedCollectionScheme?:array{periodMs:int}, conditionBasedCollectionScheme?:array{expression:string, minimumTriggerIntervalMs?:int, triggerMode?:"ALWAYS"|"RISING_EDGE", conditionLanguageVersion?:int}}, dataExtraDimensions?:array<string>, tags?:array<array{Key:string, Value:string}>, dataDestinationConfigs?:array<array{s3Config?:array{bucketArn:string, dataFormat?:"JSON"|"PARQUET", storageCompressionFormat?:"NONE"|"GZIP", prefix?:string}, timestreamConfig?:array{timestreamTableArn:string, executionRoleArn:string}, mqttTopicConfig?:array{mqttTopicArn:string, executionRoleArn:string}}>, dataPartitions?:array<array{id:string, storageOptions:array{maximumSize:array{unit:"MB"|"GB"|"TB", value:int}, storageLocation:string, minimumTimeToLive:array{unit:"HOURS"|"DAYS"|"WEEKS", value:int}}, uploadOptions?:array{expression:string, conditionLanguageVersion?:int}}>, signalsToFetch?:array<array{fullyQualifiedName:string, signalFetchConfig:array{timeBased?:array{executionFrequencyMs:int}, conditionBased?:array{conditionExpression:string, triggerMode:"ALWAYS"|"RISING_EDGE"}}, conditionLanguageVersion?:int, actions:array<string>}>} $args
     * @return \AWS\Result<array{name?:string, arn?:string}>
     */
    public function createCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, signalCatalogArn:string, targetArn:string, startTime?:int|string|\DateTimeInterface, expiryTime?:int|string|\DateTimeInterface, postTriggerCollectionDuration?:int, diagnosticsMode?:"OFF"|"SEND_ACTIVE_DTCS", spoolingMode?:"OFF"|"TO_DISK", compression?:"OFF"|"SNAPPY", priority?:int, signalsToCollect?:array<array{name:string, maxSampleCount?:int, minimumSamplingIntervalMs?:int, dataPartitionId?:string}>, collectionScheme:array{timeBasedCollectionScheme?:array{periodMs:int}, conditionBasedCollectionScheme?:array{expression:string, minimumTriggerIntervalMs?:int, triggerMode?:"ALWAYS"|"RISING_EDGE", conditionLanguageVersion?:int}}, dataExtraDimensions?:array<string>, tags?:array<array{Key:string, Value:string}>, dataDestinationConfigs?:array<array{s3Config?:array{bucketArn:string, dataFormat?:"JSON"|"PARQUET", storageCompressionFormat?:"NONE"|"GZIP", prefix?:string}, timestreamConfig?:array{timestreamTableArn:string, executionRoleArn:string}, mqttTopicConfig?:array{mqttTopicArn:string, executionRoleArn:string}}>, dataPartitions?:array<array{id:string, storageOptions:array{maximumSize:array{unit:"MB"|"GB"|"TB", value:int}, storageLocation:string, minimumTimeToLive:array{unit:"HOURS"|"DAYS"|"WEEKS", value:int}}, uploadOptions?:array{expression:string, conditionLanguageVersion?:int}}>, signalsToFetch?:array<array{fullyQualifiedName:string, signalFetchConfig:array{timeBased?:array{executionFrequencyMs:int}, conditionBased?:array{conditionExpression:string, triggerMode:"ALWAYS"|"RISING_EDGE"}}, conditionLanguageVersion?:int, actions:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string}>
     */
    public function createCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, modelManifestArn:string, signalDecoders?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, networkInterfaces?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, defaultForUnmappedSignals?:"CUSTOM_DECODING", tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function createDecoderManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, modelManifestArn:string, signalDecoders?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, networkInterfaces?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, defaultForUnmappedSignals?:"CUSTOM_DECODING", tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function createDecoderManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetId:string, description?:string, signalCatalogArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{id:string, arn:string}>
     */
    public function createFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleetId:string, description?:string, signalCatalogArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string}>
     */
    public function createFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, nodes:array<string>, signalCatalogArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function createModelManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, nodes:array<string>, signalCatalogArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function createModelManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function createSignalCatalog(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function createSignalCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, signalCatalogArn:string, stateTemplateProperties:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{name?:string, arn?:string, id?:string}>
     */
    public function createStateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, signalCatalogArn:string, stateTemplateProperties:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, id?:string}>
     */
    public function createStateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string, modelManifestArn:string, decoderManifestArn:string, attributes?:array<string, string>, associationBehavior?:"CreateIotThing"|"ValidateIotThingExists", tags?:array<array{Key:string, Value:string}>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>} $args
     * @return \AWS\Result<array{vehicleName?:string, arn?:string, thingArn?:string}>
     */
    public function createVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string, modelManifestArn:string, decoderManifestArn:string, attributes?:array<string, string>, associationBehavior?:"CreateIotThing"|"ValidateIotThingExists", tags?:array<array{Key:string, Value:string}>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicleName?:string, arn?:string, thingArn?:string}>
     */
    public function createVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string}>
     */
    public function deleteCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string}>
     */
    public function deleteCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function deleteDecoderManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function deleteDecoderManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetId:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string}>
     */
    public function deleteFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string}>
     */
    public function deleteFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function deleteModelManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function deleteModelManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function deleteSignalCatalog(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function deleteSignalCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string, id?:string}>
     */
    public function deleteStateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, id?:string}>
     */
    public function deleteStateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string} $args
     * @return \AWS\Result<array{vehicleName:string, arn:string}>
     */
    public function deleteVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicleName:string, arn:string}>
     */
    public function deleteVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string, fleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateVehicleFleet(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateVehicleFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string, description?:string, signalCatalogArn?:string, targetArn?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED", startTime?:int|string|\DateTimeInterface, expiryTime?:int|string|\DateTimeInterface, postTriggerCollectionDuration?:int, diagnosticsMode?:"OFF"|"SEND_ACTIVE_DTCS", spoolingMode?:"OFF"|"TO_DISK", compression?:"OFF"|"SNAPPY", priority?:int, signalsToCollect?:array<array{name:string, maxSampleCount?:int, minimumSamplingIntervalMs?:int, dataPartitionId?:string}>, collectionScheme?:array{timeBasedCollectionScheme?:array{periodMs:int}, conditionBasedCollectionScheme?:array{expression:string, minimumTriggerIntervalMs?:int, triggerMode?:"ALWAYS"|"RISING_EDGE", conditionLanguageVersion?:int}}, dataExtraDimensions?:array<string>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, dataDestinationConfigs?:array<array{s3Config?:array{bucketArn:string, dataFormat?:"JSON"|"PARQUET", storageCompressionFormat?:"NONE"|"GZIP", prefix?:string}, timestreamConfig?:array{timestreamTableArn:string, executionRoleArn:string}, mqttTopicConfig?:array{mqttTopicArn:string, executionRoleArn:string}}>, dataPartitions?:array<array{id:string, storageOptions:array{maximumSize:array{unit:"MB"|"GB"|"TB", value:int}, storageLocation:string, minimumTimeToLive:array{unit:"HOURS"|"DAYS"|"WEEKS", value:int}}, uploadOptions?:array{expression:string, conditionLanguageVersion?:int}}>, signalsToFetch?:array<array{fullyQualifiedName:string, signalFetchConfig:array{timeBased?:array{executionFrequencyMs:int}, conditionBased?:array{conditionExpression:string, triggerMode:"ALWAYS"|"RISING_EDGE"}}, conditionLanguageVersion?:int, actions:array<string>}>}>
     */
    public function getCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, description?:string, signalCatalogArn?:string, targetArn?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED", startTime?:int|string|\DateTimeInterface, expiryTime?:int|string|\DateTimeInterface, postTriggerCollectionDuration?:int, diagnosticsMode?:"OFF"|"SEND_ACTIVE_DTCS", spoolingMode?:"OFF"|"TO_DISK", compression?:"OFF"|"SNAPPY", priority?:int, signalsToCollect?:array<array{name:string, maxSampleCount?:int, minimumSamplingIntervalMs?:int, dataPartitionId?:string}>, collectionScheme?:array{timeBasedCollectionScheme?:array{periodMs:int}, conditionBasedCollectionScheme?:array{expression:string, minimumTriggerIntervalMs?:int, triggerMode?:"ALWAYS"|"RISING_EDGE", conditionLanguageVersion?:int}}, dataExtraDimensions?:array<string>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, dataDestinationConfigs?:array<array{s3Config?:array{bucketArn:string, dataFormat?:"JSON"|"PARQUET", storageCompressionFormat?:"NONE"|"GZIP", prefix?:string}, timestreamConfig?:array{timestreamTableArn:string, executionRoleArn:string}, mqttTopicConfig?:array{mqttTopicArn:string, executionRoleArn:string}}>, dataPartitions?:array<array{id:string, storageOptions:array{maximumSize:array{unit:"MB"|"GB"|"TB", value:int}, storageLocation:string, minimumTimeToLive:array{unit:"HOURS"|"DAYS"|"WEEKS", value:int}}, uploadOptions?:array{expression:string, conditionLanguageVersion?:int}}>, signalsToFetch?:array<array{fullyQualifiedName:string, signalFetchConfig:array{timeBased?:array{executionFrequencyMs:int}, conditionBased?:array{conditionExpression:string, triggerMode:"ALWAYS"|"RISING_EDGE"}}, conditionLanguageVersion?:int, actions:array<string>}>}>
     */
    public function getCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string, description?:string, modelManifestArn?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, message?:string}>
     */
    public function getDecoderManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string, description?:string, modelManifestArn?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, message?:string}>
     */
    public function getDecoderManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{kmsKeyId?:string, encryptionStatus:"PENDING"|"SUCCESS"|"FAILURE", encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION", errorMessage?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function getEncryptionConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{kmsKeyId?:string, encryptionStatus:"PENDING"|"SUCCESS"|"FAILURE", encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION", errorMessage?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function getEncryptionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetId:string} $args
     * @return \AWS\Result<array{id:string, arn:string, description?:string, signalCatalogArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, description?:string, signalCatalogArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{cloudWatchLogDelivery:array{logType:"OFF"|"ERROR", logGroupName?:string}}>
     */
    public function getLoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{cloudWatchLogDelivery:array{logType:"OFF"|"ERROR", logGroupName?:string}}>
     */
    public function getLoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string, description?:string, signalCatalogArn?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getModelManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string, description?:string, signalCatalogArn?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getModelManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{customerAccountId:string, accountStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", timestreamRegistrationResponse?:array{timestreamDatabaseName:string, timestreamTableName:string, timestreamDatabaseArn?:string, timestreamTableArn?:string, registrationStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", errorMessage?:string}, iamRegistrationResponse:array{roleArn:string, registrationStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", errorMessage?:string}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getRegisterAccountStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{customerAccountId:string, accountStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", timestreamRegistrationResponse?:array{timestreamDatabaseName:string, timestreamTableName:string, timestreamDatabaseArn?:string, timestreamTableArn?:string, registrationStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", errorMessage?:string}, iamRegistrationResponse:array{roleArn:string, registrationStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", errorMessage?:string}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getRegisterAccountStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, arn:string, description?:string, nodeCounts?:array{totalNodes?:int, totalBranches?:int, totalSensors?:int, totalAttributes?:int, totalActuators?:int, totalStructs?:int, totalProperties?:int}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getSignalCatalog(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string, description?:string, nodeCounts?:array{totalNodes?:int, totalBranches?:int, totalSensors?:int, totalAttributes?:int, totalActuators?:int, totalStructs?:int, totalProperties?:int}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function getSignalCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string, description?:string, signalCatalogArn?:string, stateTemplateProperties?:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, id?:string}>
     */
    public function getStateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, description?:string, signalCatalogArn?:string, stateTemplateProperties?:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, id?:string}>
     */
    public function getStateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string} $args
     * @return \AWS\Result<array{vehicleName?:string, arn?:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function getVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicleName?:string, arn?:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, stateTemplates?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function getVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, vehicleName:string} $args
     * @return \AWS\Result<array{campaigns?:array<array{campaignName?:string, vehicleName?:string, status?:"CREATED"|"READY"|"HEALTHY"|"SUSPENDED"|"DELETING"}>, nextToken?:string}>
     */
    public function getVehicleStatus(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, vehicleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaigns?:array<array{campaignName?:string, vehicleName?:string, status?:"CREATED"|"READY"|"HEALTHY"|"SUSPENDED"|"DELETING"}>, nextToken?:string}>
     */
    public function getVehicleStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, networkFileDefinitions:array<array{canDbc?:array{networkInterface:string, canDbcFiles:array<string|resource|\Psr\Http\Message\StreamInterface>, signalsMap?:array<string, string>}}>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function importDecoderManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string, networkFileDefinitions:array<array{canDbc?:array{networkInterface:string, canDbcFiles:array<string|resource|\Psr\Http\Message\StreamInterface>, signalsMap?:array<string, string>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function importDecoderManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, vss?:array{vssJson?:string}, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function importSignalCatalog(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, vss?:array{vssJson?:string}, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function importSignalCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:string} $args
     * @return \AWS\Result<array{campaignSummaries?:array<array{arn?:string, name?:string, description?:string, signalCatalogArn?:string, targetArn?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCampaigns(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaignSummaries?:array<array{arn?:string, name?:string, description?:string, signalCatalogArn?:string, targetArn?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCampaignsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{networkInterfaces?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, nextToken?:string}>
     */
    public function listDecoderManifestNetworkInterfaces(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkInterfaces?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, nextToken?:string}>
     */
    public function listDecoderManifestNetworkInterfacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{signalDecoders?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, nextToken?:string}>
     */
    public function listDecoderManifestSignals(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{signalDecoders?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, nextToken?:string}>
     */
    public function listDecoderManifestSignalsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelManifestArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{name?:string, arn?:string, modelManifestArn?:string, description?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, message?:string}>, nextToken?:string}>
     */
    public function listDecoderManifests(array $args = []): \AWS\Result { }

    /**
     * @param array{modelManifestArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{name?:string, arn?:string, modelManifestArn?:string, description?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, message?:string}>, nextToken?:string}>
     */
    public function listDecoderManifestsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{fleetSummaries?:array<array{id:string, arn:string, description?:string, signalCatalogArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listFleets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleetSummaries?:array<array{id:string, arn:string, description?:string, signalCatalogArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listFleetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{fleets?:array<string>, nextToken?:string}>
     */
    public function listFleetsForVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleets?:array<string>, nextToken?:string}>
     */
    public function listFleetsForVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nextToken?:string}>
     */
    public function listModelManifestNodes(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nextToken?:string}>
     */
    public function listModelManifestNodesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{signalCatalogArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{name?:string, arn?:string, signalCatalogArn?:string, description?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listModelManifests(array $args = []): \AWS\Result { }

    /**
     * @param array{signalCatalogArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{name?:string, arn?:string, signalCatalogArn?:string, description?:string, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listModelManifestsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int, signalNodeType?:"SENSOR"|"ACTUATOR"|"ATTRIBUTE"|"BRANCH"|"CUSTOM_STRUCT"|"CUSTOM_PROPERTY"} $args
     * @return \AWS\Result<array{nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nextToken?:string}>
     */
    public function listSignalCatalogNodes(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int, signalNodeType?:"SENSOR"|"ACTUATOR"|"ATTRIBUTE"|"BRANCH"|"CUSTOM_STRUCT"|"CUSTOM_PROPERTY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodes?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nextToken?:string}>
     */
    public function listSignalCatalogNodesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{name?:string, arn?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSignalCatalogs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{name?:string, arn?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSignalCatalogsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{name?:string, arn?:string, signalCatalogArn?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, id?:string}>, nextToken?:string}>
     */
    public function listStateTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{name?:string, arn?:string, signalCatalogArn?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastModificationTime?:int|string|\DateTimeInterface, id?:string}>, nextToken?:string}>
     */
    public function listStateTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelManifestArn?:string, attributeNames?:array<string>, attributeValues?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{vehicleSummaries?:array<array{vehicleName:string, arn:string, modelManifestArn:string, decoderManifestArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, attributes?:array<string, string>}>, nextToken?:string}>
     */
    public function listVehicles(array $args = []): \AWS\Result { }

    /**
     * @param array{modelManifestArn?:string, attributeNames?:array<string>, attributeValues?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicleSummaries?:array<array{vehicleName:string, arn:string, modelManifestArn:string, decoderManifestArn:string, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface, attributes?:array<string, string>}>, nextToken?:string}>
     */
    public function listVehiclesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{vehicles?:array<string>, nextToken?:string}>
     */
    public function listVehiclesInFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicles?:array<string>, nextToken?:string}>
     */
    public function listVehiclesInFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{kmsKeyId?:string, encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION"} $args
     * @return \AWS\Result<array{kmsKeyId?:string, encryptionStatus:"PENDING"|"SUCCESS"|"FAILURE", encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION"}>
     */
    public function putEncryptionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{kmsKeyId?:string, encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{kmsKeyId?:string, encryptionStatus:"PENDING"|"SUCCESS"|"FAILURE", encryptionType:"KMS_BASED_ENCRYPTION"|"FLEETWISE_DEFAULT_ENCRYPTION"}>
     */
    public function putEncryptionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{cloudWatchLogDelivery:array{logType:"OFF"|"ERROR", logGroupName?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function putLoggingOptions(array $args): \AWS\Result { }

    /**
     * @param array{cloudWatchLogDelivery:array{logType:"OFF"|"ERROR", logGroupName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putLoggingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{timestreamResources?:array{timestreamDatabaseName:string, timestreamTableName:string}, iamResources?:array{roleArn:string}} $args
     * @return \AWS\Result<array{registerAccountStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", timestreamResources?:array{timestreamDatabaseName:string, timestreamTableName:string}, iamResources:array{roleArn:string}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function registerAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{timestreamResources?:array{timestreamDatabaseName:string, timestreamTableName:string}, iamResources?:array{roleArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{registerAccountStatus:"REGISTRATION_PENDING"|"REGISTRATION_SUCCESS"|"REGISTRATION_FAILURE", timestreamResources?:array{timestreamDatabaseName:string, timestreamTableName:string}, iamResources:array{roleArn:string}, creationTime:int|string|\DateTimeInterface, lastModificationTime:int|string|\DateTimeInterface}>
     */
    public function registerAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{name:string, description?:string, dataExtraDimensions?:array<string>, action:"APPROVE"|"SUSPEND"|"RESUME"|"UPDATE"} $args
     * @return \AWS\Result<array{arn?:string, name?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED"}>
     */
    public function updateCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, dataExtraDimensions?:array<string>, action:"APPROVE"|"SUSPEND"|"RESUME"|"UPDATE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, status?:"CREATING"|"WAITING_FOR_APPROVAL"|"RUNNING"|"SUSPENDED"}>
     */
    public function updateCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, signalDecodersToAdd?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, signalDecodersToUpdate?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, signalDecodersToRemove?:array<string>, networkInterfacesToAdd?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, networkInterfacesToUpdate?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, networkInterfacesToRemove?:array<string>, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", defaultForUnmappedSignals?:"CUSTOM_DECODING"} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function updateDecoderManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, signalDecodersToAdd?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, signalDecodersToUpdate?:array<array{fullyQualifiedName:string, type:"CAN_SIGNAL"|"OBD_SIGNAL"|"MESSAGE_SIGNAL"|"CUSTOM_DECODING_SIGNAL", interfaceId:string, canSignal?:array{messageId:int, isBigEndian:bool, isSigned:bool, startBit:int, offset:float, factor:float, length:int, name?:string}, obdSignal?:array{pidResponseLength:int, serviceMode:int, pid:int, scaling:float, offset:float, startByte:int, byteLength:int, bitRightShift?:int, bitMaskLength?:int}, messageSignal?:array{topicName:string, structuredMessage:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}}>}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:array<array{fieldName:string, dataType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:array{name:string, memberType:array{primitiveMessageDefinition?:array{ros2PrimitiveMessageDefinition?:array{primitiveType:"BOOL"|"BYTE"|"CHAR"|"FLOAT32"|"FLOAT64"|"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"STRING"|"WSTRING", offset?:float, scaling?:float, upperBound?:int}}, structuredMessageListDefinition?:mixed, structuredMessageDefinition?:mixed}, listType:"FIXED_CAPACITY"|"DYNAMIC_UNBOUNDED_CAPACITY"|"DYNAMIC_BOUNDED_CAPACITY", capacity?:int}, structuredMessageDefinition?:mixed}}>}}, customDecodingSignal?:array{id:string}}>, signalDecodersToRemove?:array<string>, networkInterfacesToAdd?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, networkInterfacesToUpdate?:array<array{interfaceId:string, type:"CAN_INTERFACE"|"OBD_INTERFACE"|"VEHICLE_MIDDLEWARE"|"CUSTOM_DECODING_INTERFACE", canInterface?:array{name:string, protocolName?:string, protocolVersion?:string}, obdInterface?:array{name:string, requestMessageId:int, obdStandard?:string, pidRequestIntervalSeconds?:int, dtcRequestIntervalSeconds?:int, useExtendedIds?:bool, hasTransmissionEcu?:bool}, vehicleMiddleware?:array{name:string, protocolName:"ROS_2"}, customDecodingInterface?:array{name:string}}>, networkInterfacesToRemove?:array<string>, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING", defaultForUnmappedSignals?:"CUSTOM_DECODING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function updateDecoderManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetId:string, description?:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string}>
     */
    public function updateFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleetId:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string}>
     */
    public function updateFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, nodesToAdd?:array<string>, nodesToRemove?:array<string>, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING"} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function updateModelManifest(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, nodesToAdd?:array<string>, nodesToRemove?:array<string>, status?:"ACTIVE"|"DRAFT"|"INVALID"|"VALIDATING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function updateModelManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, nodesToAdd?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nodesToUpdate?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nodesToRemove?:array<string>} $args
     * @return \AWS\Result<array{name:string, arn:string}>
     */
    public function updateSignalCatalog(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, nodesToAdd?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nodesToUpdate?:array<array{branch?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, sensor?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, actuator?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}, attribute?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", description?:string, unit?:string, allowedValues?:array<string>, min?:float, max?:float, assignedValue?:string, defaultValue?:string, deprecationMessage?:string, comment?:string}, struct?:array{fullyQualifiedName:string, description?:string, deprecationMessage?:string, comment?:string}, property?:array{fullyQualifiedName:string, dataType:"INT8"|"UINT8"|"INT16"|"UINT16"|"INT32"|"UINT32"|"INT64"|"UINT64"|"BOOLEAN"|"FLOAT"|"DOUBLE"|"STRING"|"UNIX_TIMESTAMP"|"INT8_ARRAY"|"UINT8_ARRAY"|"INT16_ARRAY"|"UINT16_ARRAY"|"INT32_ARRAY"|"UINT32_ARRAY"|"INT64_ARRAY"|"UINT64_ARRAY"|"BOOLEAN_ARRAY"|"FLOAT_ARRAY"|"DOUBLE_ARRAY"|"STRING_ARRAY"|"UNIX_TIMESTAMP_ARRAY"|"UNKNOWN"|"STRUCT"|"STRUCT_ARRAY", dataEncoding?:"BINARY"|"TYPED", description?:string, deprecationMessage?:string, comment?:string, structFullyQualifiedName?:string}}>, nodesToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, arn:string}>
     */
    public function updateSignalCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string, description?:string, stateTemplatePropertiesToAdd?:array<string>, stateTemplatePropertiesToRemove?:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>} $args
     * @return \AWS\Result<array{name?:string, arn?:string, id?:string}>
     */
    public function updateStateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, description?:string, stateTemplatePropertiesToAdd?:array<string>, stateTemplatePropertiesToRemove?:array<string>, dataExtraDimensions?:array<string>, metadataExtraDimensions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, id?:string}>
     */
    public function updateStateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vehicleName:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, attributeUpdateMode?:"Overwrite"|"Merge", stateTemplatesToAdd?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, stateTemplatesToRemove?:array<string>} $args
     * @return \AWS\Result<array{vehicleName?:string, arn?:string}>
     */
    public function updateVehicle(array $args): \AWS\Result { }

    /**
     * @param array{vehicleName:string, modelManifestArn?:string, decoderManifestArn?:string, attributes?:array<string, string>, attributeUpdateMode?:"Overwrite"|"Merge", stateTemplatesToAdd?:array<array{identifier:string, stateTemplateUpdateStrategy:array{periodic?:array{stateTemplateUpdateRate:array{unit:"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR", value:int}}, onChange?:array{}}}>, stateTemplatesToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vehicleName?:string, arn?:string}>
     */
    public function updateVehicleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
