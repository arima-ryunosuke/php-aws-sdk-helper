<?php
namespace AWS\GeoMaps;

class GeoMapsClient
{
    /**
     * @param array{FontStack:string, FontUnicodeRange:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getGlyphs(array $args): \AWS\Result { }

    /**
     * @param array{FontStack:string, FontUnicodeRange:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getGlyphsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileName:string, Style:"Standard"|"Monochrome"|"Hybrid"|"Satellite", ColorScheme:"Light"|"Dark", Variant:"Default"} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getSprites(array $args): \AWS\Result { }

    /**
     * @param array{FileName:string, Style:"Standard"|"Monochrome"|"Hybrid"|"Satellite", ColorScheme:"Light"|"Dark", Variant:"Default"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getSpritesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BoundingBox?:string, BoundedPositions?:string, Center?:string, CompactOverlay?:string, GeoJsonOverlay?:string, Height:int, Key?:string, Padding?:int, Radius?:int, FileName:string, ScaleBarUnit?:"Kilometers"|"KilometersMiles"|"Miles"|"MilesKilometers", Style?:"Satellite", Width:int, Zoom?:float} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string, PricingBucket:string}>
     */
    public function getStaticMap(array $args): \AWS\Result { }

    /**
     * @param array{BoundingBox?:string, BoundedPositions?:string, Center?:string, CompactOverlay?:string, GeoJsonOverlay?:string, Height:int, Key?:string, Padding?:int, Radius?:int, FileName:string, ScaleBarUnit?:"Kilometers"|"KilometersMiles"|"Miles"|"MilesKilometers", Style?:"Satellite", Width:int, Zoom?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string, PricingBucket:string}>
     */
    public function getStaticMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Style:"Standard"|"Monochrome"|"Hybrid"|"Satellite", ColorScheme?:"Light"|"Dark", PoliticalView?:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getStyleDescriptor(array $args): \AWS\Result { }

    /**
     * @param array{Style:"Standard"|"Monochrome"|"Hybrid"|"Satellite", ColorScheme?:"Light"|"Dark", PoliticalView?:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string}>
     */
    public function getStyleDescriptorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Tileset:string, Z:string, X:string, Y:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string, PricingBucket:string}>
     */
    public function getTile(array $args): \AWS\Result { }

    /**
     * @param array{Tileset:string, Z:string, X:string, Y:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string, ETag?:string, PricingBucket:string}>
     */
    public function getTileAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
