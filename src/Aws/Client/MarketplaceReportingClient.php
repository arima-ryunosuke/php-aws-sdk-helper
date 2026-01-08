<?php
namespace AWS\MarketplaceReporting;

class MarketplaceReportingClient
{
    /**
     * @param array{dashboardIdentifier:string, embeddingDomains:array<string>} $args
     * @return \AWS\Result<array{embedUrl:string, dashboardIdentifier:string, embeddingDomains:array<string>}>
     */
    public function getBuyerDashboard(array $args): \AWS\Result { }

    /**
     * @param array{dashboardIdentifier:string, embeddingDomains:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{embedUrl:string, dashboardIdentifier:string, embeddingDomains:array<string>}>
     */
    public function getBuyerDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
