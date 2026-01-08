<?php
namespace AWS\AppConfigData;

class AppConfigDataClient
{
    /**
     * @param array{ConfigurationToken:string} $args
     * @return \AWS\Result<array{NextPollConfigurationToken?:string, NextPollIntervalInSeconds?:int, ContentType?:string, Configuration?:string|resource|\Psr\Http\Message\StreamInterface, VersionLabel?:string}>
     */
    public function getLatestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextPollConfigurationToken?:string, NextPollIntervalInSeconds?:int, ContentType?:string, Configuration?:string|resource|\Psr\Http\Message\StreamInterface, VersionLabel?:string}>
     */
    public function getLatestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ConfigurationProfileIdentifier:string, RequiredMinimumPollIntervalInSeconds?:int} $args
     * @return \AWS\Result<array{InitialConfigurationToken?:string}>
     */
    public function startConfigurationSession(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ConfigurationProfileIdentifier:string, RequiredMinimumPollIntervalInSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InitialConfigurationToken?:string}>
     */
    public function startConfigurationSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
