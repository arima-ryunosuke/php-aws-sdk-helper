<?php
namespace AWS\MarketplaceEntitlementService;

class MarketplaceEntitlementServiceClient
{
    /**
     * @param array{ProductCode:string, Filter?:array<"CUSTOMER_IDENTIFIER"|"DIMENSION", array<string>>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Entitlements?:array<array{ProductCode?:string, Dimension?:string, CustomerIdentifier?:string, Value?:array{IntegerValue?:int, DoubleValue?:float, BooleanValue?:bool, StringValue?:string}, ExpirationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getEntitlements(array $args): \AWS\Result { }

    /**
     * @param array{ProductCode:string, Filter?:array<"CUSTOMER_IDENTIFIER"|"DIMENSION", array<string>>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlements?:array<array{ProductCode?:string, Dimension?:string, CustomerIdentifier?:string, Value?:array{IntegerValue?:int, DoubleValue?:float, BooleanValue?:bool, StringValue?:string}, ExpirationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getEntitlementsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
