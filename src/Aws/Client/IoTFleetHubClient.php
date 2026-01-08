<?php
namespace AWS\IoTFleetHub;

class IoTFleetHubClient
{
    /**
     * @param array{applicationName:string, applicationDescription?:string, clientToken?:string, roleArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{applicationId:string, applicationArn:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, applicationDescription?:string, clientToken?:string, roleArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, applicationArn:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{applicationId:string, applicationArn:string, applicationName:string, applicationDescription?:string, applicationUrl:string, applicationState:"CREATING"|"DELETING"|"ACTIVE"|"CREATE_FAILED"|"DELETE_FAILED", applicationCreationDate:int, applicationLastUpdateDate:int, roleArn:string, ssoClientId?:string, errorMessage?:string, tags?:array<string, string>}>
     */
    public function describeApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, applicationArn:string, applicationName:string, applicationDescription?:string, applicationUrl:string, applicationState:"CREATING"|"DELETING"|"ACTIVE"|"CREATE_FAILED"|"DELETE_FAILED", applicationCreationDate:int, applicationLastUpdateDate:int, roleArn:string, ssoClientId?:string, errorMessage?:string, tags?:array<string, string>}>
     */
    public function describeApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{applicationSummaries?:array<array{applicationId:string, applicationName:string, applicationDescription?:string, applicationUrl:string, applicationCreationDate?:int, applicationLastUpdateDate?:int, applicationState?:"CREATING"|"DELETING"|"ACTIVE"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationSummaries?:array<array{applicationId:string, applicationName:string, applicationDescription?:string, applicationUrl:string, applicationCreationDate?:int, applicationLastUpdateDate?:int, applicationState?:"CREATING"|"DELETING"|"ACTIVE"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
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

    /**
     * @param array{applicationId:string, applicationName?:string, applicationDescription?:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, applicationName?:string, applicationDescription?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
