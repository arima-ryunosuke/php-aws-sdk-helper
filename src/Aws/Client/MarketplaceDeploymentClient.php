<?php
namespace AWS\MarketplaceDeployment;

class MarketplaceDeploymentClient
{
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
     * @param array{agreementId:string, catalog:string, clientToken?:string, deploymentParameter:array{name:string, secretString:string}, expirationDate?:int|string|\DateTimeInterface, productId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{agreementId:string, deploymentParameterId:string, resourceArn:string, tags?:array<string, string>}>
     */
    public function putDeploymentParameter(array $args): \AWS\Result { }

    /**
     * @param array{agreementId:string, catalog:string, clientToken?:string, deploymentParameter:array{name:string, secretString:string}, expirationDate?:int|string|\DateTimeInterface, productId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{agreementId:string, deploymentParameterId:string, resourceArn:string, tags?:array<string, string>}>
     */
    public function putDeploymentParameterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags?:array<string, string>} $args
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
