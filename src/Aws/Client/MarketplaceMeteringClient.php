<?php
namespace AWS\MarketplaceMetering;

class MarketplaceMeteringClient
{
    /**
     * @param array{UsageRecords:array<array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}>, ProductCode:string} $args
     * @return \AWS\Result<array{Results?:array<array{UsageRecord?:array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}, MeteringRecordId?:string, Status?:"Success"|"CustomerNotSubscribed"|"DuplicateRecord"}>, UnprocessedRecords?:array<array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}>}>
     */
    public function batchMeterUsage(array $args): \AWS\Result { }

    /**
     * @param array{UsageRecords:array<array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}>, ProductCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{UsageRecord?:array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}, MeteringRecordId?:string, Status?:"Success"|"CustomerNotSubscribed"|"DuplicateRecord"}>, UnprocessedRecords?:array<array{Timestamp:int|string|\DateTimeInterface, CustomerIdentifier:string, Dimension:string, Quantity?:int, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>}>}>
     */
    public function batchMeterUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductCode:string, Timestamp:int|string|\DateTimeInterface, UsageDimension:string, UsageQuantity?:int, DryRun?:bool, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \AWS\Result<array{MeteringRecordId?:string}>
     */
    public function meterUsage(array $args): \AWS\Result { }

    /**
     * @param array{ProductCode:string, Timestamp:int|string|\DateTimeInterface, UsageDimension:string, UsageQuantity?:int, DryRun?:bool, UsageAllocations?:array<array{AllocatedUsageQuantity:int, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MeteringRecordId?:string}>
     */
    public function meterUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductCode:string, PublicKeyVersion:int, Nonce?:string} $args
     * @return \AWS\Result<array{PublicKeyRotationTimestamp?:int|string|\DateTimeInterface, Signature?:string}>
     */
    public function registerUsage(array $args): \AWS\Result { }

    /**
     * @param array{ProductCode:string, PublicKeyVersion:int, Nonce?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKeyRotationTimestamp?:int|string|\DateTimeInterface, Signature?:string}>
     */
    public function registerUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationToken:string} $args
     * @return \AWS\Result<array{CustomerIdentifier?:string, ProductCode?:string, CustomerAWSAccountId?:string}>
     */
    public function resolveCustomer(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomerIdentifier?:string, ProductCode?:string, CustomerAWSAccountId?:string}>
     */
    public function resolveCustomerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
