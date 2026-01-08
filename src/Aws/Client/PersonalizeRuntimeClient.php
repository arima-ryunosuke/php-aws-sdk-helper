<?php
namespace AWS\PersonalizeRuntime;

class PersonalizeRuntimeClient
{
    /**
     * @param array{campaignArn?:string, userId?:string, numResults?:int, filterArn?:string, filterValues?:array<string, string>} $args
     * @return \AWS\Result<array{actionList?:array<array{actionId?:string, score?:float}>, recommendationId?:string}>
     */
    public function getActionRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{campaignArn?:string, userId?:string, numResults?:int, filterArn?:string, filterValues?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionList?:array<array{actionId?:string, score?:float}>, recommendationId?:string}>
     */
    public function getActionRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignArn:string, inputList:array<string>, userId:string, context?:array<string, string>, filterArn?:string, filterValues?:array<string, string>, metadataColumns?:array<string, array<string>>} $args
     * @return \AWS\Result<array{personalizedRanking?:array<array{itemId?:string, score?:float, promotionName?:string, metadata?:array<string, string>, reason?:array<string>}>, recommendationId?:string}>
     */
    public function getPersonalizedRanking(array $args): \AWS\Result { }

    /**
     * @param array{campaignArn:string, inputList:array<string>, userId:string, context?:array<string, string>, filterArn?:string, filterValues?:array<string, string>, metadataColumns?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{personalizedRanking?:array<array{itemId?:string, score?:float, promotionName?:string, metadata?:array<string, string>, reason?:array<string>}>, recommendationId?:string}>
     */
    public function getPersonalizedRankingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignArn?:string, itemId?:string, userId?:string, numResults?:int, context?:array<string, string>, filterArn?:string, filterValues?:array<string, string>, recommenderArn?:string, promotions?:array<array{name?:string, percentPromotedItems?:int, filterArn?:string, filterValues?:array<string, string>}>, metadataColumns?:array<string, array<string>>} $args
     * @return \AWS\Result<array{itemList?:array<array{itemId?:string, score?:float, promotionName?:string, metadata?:array<string, string>, reason?:array<string>}>, recommendationId?:string}>
     */
    public function getRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{campaignArn?:string, itemId?:string, userId?:string, numResults?:int, context?:array<string, string>, filterArn?:string, filterValues?:array<string, string>, recommenderArn?:string, promotions?:array<array{name?:string, percentPromotedItems?:int, filterArn?:string, filterValues?:array<string, string>}>, metadataColumns?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{itemList?:array<array{itemId?:string, score?:float, promotionName?:string, metadata?:array<string, string>, reason?:array<string>}>, recommendationId?:string}>
     */
    public function getRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
