<?php
namespace AWS\ForecastQueryService;

class ForecastQueryServiceClient
{
    /**
     * @param array{ForecastArn:string, StartDate?:string, EndDate?:string, Filters:array<string, string>, NextToken?:string} $args
     * @return \AWS\Result<array{Forecast?:array{Predictions?:array<string, array<array{Timestamp?:string, Value?:float}>>}}>
     */
    public function queryForecast(array $args): \AWS\Result { }

    /**
     * @param array{ForecastArn:string, StartDate?:string, EndDate?:string, Filters:array<string, string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Forecast?:array{Predictions?:array<string, array<array{Timestamp?:string, Value?:float}>>}}>
     */
    public function queryForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastArn:string, StartDate?:string, EndDate?:string, Filters:array<string, string>, NextToken?:string} $args
     * @return \AWS\Result<array{Forecast?:array{Predictions?:array<string, array<array{Timestamp?:string, Value?:float}>>}}>
     */
    public function queryWhatIfForecast(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastArn:string, StartDate?:string, EndDate?:string, Filters:array<string, string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Forecast?:array{Predictions?:array<string, array<array{Timestamp?:string, Value?:float}>>}}>
     */
    public function queryWhatIfForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
