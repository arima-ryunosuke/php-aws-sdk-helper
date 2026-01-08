<?php
namespace AWS\InspectorScan;

class InspectorScanClient
{
    /**
     * @param array{sbom:array{}, outputFormat?:"CYCLONE_DX_1_5"|"INSPECTOR"} $args
     * @return \AWS\Result<array{sbom?:array{}}>
     */
    public function scanSbom(array $args): \AWS\Result { }

    /**
     * @param array{sbom:array{}, outputFormat?:"CYCLONE_DX_1_5"|"INSPECTOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{sbom?:array{}}>
     */
    public function scanSbomAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
