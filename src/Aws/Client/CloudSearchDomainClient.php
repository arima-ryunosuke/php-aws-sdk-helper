<?php
namespace AWS\CloudSearchDomain;

class CloudSearchDomainClient
{
    /**
     * @param array{cursor?:string, expr?:string, facet?:string, filterQuery?:string, highlight?:string, partial?:bool, query:string, queryOptions?:string, queryParser?:"simple"|"structured"|"lucene"|"dismax", return?:string, size?:int, sort?:string, start?:int, stats?:string} $args
     * @return \AWS\Result<array{status?:array{timems?:int, rid?:string}, hits?:array{found?:int, start?:int, cursor?:string, hit?:array<array{id?:string, fields?:array<string, array<string>>, exprs?:array<string, string>, highlights?:array<string, string>}>}, facets?:array<string, array{buckets?:array<array{value?:string, count?:int}>}>, stats?:array<string, array{min?:string, max?:string, count?:int, missing?:int, sum?:float, sumOfSquares?:float, mean?:string, stddev?:float}>}>
     */
    public function search(array $args): \AWS\Result { }

    /**
     * @param array{cursor?:string, expr?:string, facet?:string, filterQuery?:string, highlight?:string, partial?:bool, query:string, queryOptions?:string, queryParser?:"simple"|"structured"|"lucene"|"dismax", return?:string, size?:int, sort?:string, start?:int, stats?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:array{timems?:int, rid?:string}, hits?:array{found?:int, start?:int, cursor?:string, hit?:array<array{id?:string, fields?:array<string, array<string>>, exprs?:array<string, string>, highlights?:array<string, string>}>}, facets?:array<string, array{buckets?:array<array{value?:string, count?:int}>}>, stats?:array<string, array{min?:string, max?:string, count?:int, missing?:int, sum?:float, sumOfSquares?:float, mean?:string, stddev?:float}>}>
     */
    public function searchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{query:string, suggester:string, size?:int} $args
     * @return \AWS\Result<array{status?:array{timems?:int, rid?:string}, suggest?:array{query?:string, found?:int, suggestions?:array<array{suggestion?:string, score?:int, id?:string}>}}>
     */
    public function suggest(array $args): \AWS\Result { }

    /**
     * @param array{query:string, suggester:string, size?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:array{timems?:int, rid?:string}, suggest?:array{query?:string, found?:int, suggestions?:array<array{suggestion?:string, score?:int, id?:string}>}}>
     */
    public function suggestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{documents:string|resource|\Psr\Http\Message\StreamInterface, contentType:"application/json"|"application/xml"} $args
     * @return \AWS\Result<array{status?:string, adds?:int, deletes?:int, warnings?:array<array{message?:string}>}>
     */
    public function uploadDocuments(array $args): \AWS\Result { }

    /**
     * @param array{documents:string|resource|\Psr\Http\Message\StreamInterface, contentType:"application/json"|"application/xml"} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, adds?:int, deletes?:int, warnings?:array<array{message?:string}>}>
     */
    public function uploadDocumentsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
