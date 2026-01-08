<?php
namespace AWS\Pricing;

class PricingClient
{
    /**
     * @param array{ServiceCode?:string, FormatVersion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Services?:array<array{ServiceCode:string, AttributeNames?:array<string>}>, FormatVersion?:string, NextToken?:string}>
     */
    public function describeServices(array $args = []): \AWS\Result { }

    /**
     * @param array{ServiceCode?:string, FormatVersion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Services?:array<array{ServiceCode:string, AttributeNames?:array<string>}>, FormatVersion?:string, NextToken?:string}>
     */
    public function describeServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, AttributeName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AttributeValues?:array<array{Value?:string}>, NextToken?:string}>
     */
    public function getAttributeValues(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, AttributeName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttributeValues?:array<array{Value?:string}>, NextToken?:string}>
     */
    public function getAttributeValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PriceListArn:string, FileFormat:string} $args
     * @return \AWS\Result<array{Url?:string}>
     */
    public function getPriceListFileUrl(array $args): \AWS\Result { }

    /**
     * @param array{PriceListArn:string, FileFormat:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Url?:string}>
     */
    public function getPriceListFileUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, Filters?:array<array{Type:"TERM_MATCH", Field:string, Value:string}>, FormatVersion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FormatVersion?:string, PriceList?:array<string>, NextToken?:string}>
     */
    public function getProducts(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, Filters?:array<array{Type:"TERM_MATCH", Field:string, Value:string}>, FormatVersion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FormatVersion?:string, PriceList?:array<string>, NextToken?:string}>
     */
    public function getProductsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, EffectiveDate:int|string|\DateTimeInterface, RegionCode?:string, CurrencyCode:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PriceLists?:array<array{PriceListArn?:string, RegionCode?:string, CurrencyCode?:string, FileFormats?:array<string>}>, NextToken?:string}>
     */
    public function listPriceLists(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, EffectiveDate:int|string|\DateTimeInterface, RegionCode?:string, CurrencyCode:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PriceLists?:array<array{PriceListArn?:string, RegionCode?:string, CurrencyCode?:string, FileFormats?:array<string>}>, NextToken?:string}>
     */
    public function listPriceListsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
