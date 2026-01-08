<?php
namespace ryunosuke\Aws\Helper;

use Generator;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

class ClientGenerator
{
    public static function generate(): Generator
    {
        $V = fn($v) => $v;

        $vendorDirectory = array_filter([__DIR__ . '/../../../vendor/', __DIR__ . '/../../../../../'], 'file_exists');
        $dataDirectory   = reset($vendorDirectory) . '/aws/aws-sdk-php/src/data';
        $outputDirectory = __DIR__ . '/../Client';

        $currents = array_flip(array_map('realpath', glob("$outputDirectory/*.php")));

        $manifests = require $manifestFile = realpath("$dataDirectory/manifest.json.php");
        yield "load $manifestFile";
        foreach ($manifests as $id => $manifest) {
            $version = $manifest['versions']['latest'];
            $schema  = require $api2File = realpath("$dataDirectory/$id/$version/api-2.json.php");
            yield "load $api2File";

            $shapes = self::implodeArrayMap($schema['shapes'], fn($v, $k) => self::resolveShape($schema, $v, $k, []), null);

            $methods = [];
            foreach ($schema['operations'] as $operation) {
                $required = !!(($schema['shapes'][$operation['input']['shape'] ?? null] ?? null)['required'] ?? []);
                $param    = $shapes[$operation['input']['shape'] ?? null] ?? null;
                $return   = $shapes[$operation['output']['shape'] ?? null] ?? null;

                $break = false;
                foreach ([
                    ''      => ['\\' . \AWS\Result::class],
                    'Async' => ['\\' . \GuzzleHttp\Promise\Promise::class],
                ] as $suffix => [$returnClass]) {
                    $methodName = "{$V(lcfirst($operation['name']))}{$suffix}";

                    // some client have actual methodAsync(e.g. LambdaClient)
                    // normal method(e.g. LambdaClient::method):
                    // - LambdaClient::method               : use
                    // - LambdaClient::methodAsync(virtual) : use
                    // async method(e.g. LambdaClient::invoke):
                    // - LambdaClient::invoke               : use
                    // - LambdaClient::invokeAsync(virtual) : disuse
                    // - LambdaClient::invokeAsync(actual)  : use
                    // - LambdaClient::invokeAsyncAsync     : disuse
                    if ($break && $suffix === 'Async') {
                        break;
                    }
                    $break = isset($methods[$methodName]);

                    $methods[$methodName] = <<<METHOD
                        /**
                         * @param {$V($param ?? 'array')} \$args
                         * @return $returnClass<{$V($return ?? 'void')}>
                         */
                        public function $methodName(array \$args{$V($required ? '' : ' = []')}): $returnClass { }
                    METHOD;
                }
            }

            file_put_contents("$outputDirectory/{$manifest['namespace']}Client.php", <<<PHP
                <?php
                namespace AWS\\{$manifest['namespace']};
                
                class {$manifest['namespace']}Client
                {
                {$V(implode("\n\n", $methods))}
                }

                PHP,);
            yield "save " . ($classFile = realpath("$outputDirectory/{$manifest['namespace']}Client.php"));
            unset($currents[$classFile]);
        }

        foreach ($currents as $current => $ignored) {
            unlink($current);
            yield "unlink $current";
        }
    }

    private static function resolveShape(array $schema, array $shape, $key, $history): string
    {
        $V = fn($v) => $v;

        if (in_array($key, $history, true)) {
            return 'mixed';
        }

        $enum = null;
        if ($shape['enum'] ?? []) {
            $enum = [];
            foreach ($shape['enum'] as $value) {
                $enum[] = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }
            $enum = implode('|', $enum);
        }

        return match ($shape['type']) {
            "boolean"         => $enum ?? "bool",
            "integer", "long" => $enum ?? "int",
            "float", "double" => $enum ?? "float",
            "string"          => $enum ?? "string",
            "blob"            => $enum ?? "string|resource|\\Psr\\Http\\Message\\StreamInterface",
            "timestamp"       => $enum ?? "int|string|\\DateTimeInterface",
            "map"             => $enum ?? "array<{$V(self::resolveShape($schema, $schema['shapes'][$shape['key']['shape']], $key, $history))}, {$V(self::resolveShape($schema, $schema['shapes'][$shape['value']['shape']], $key, $history))}>",
            "list"            => $enum ?? "array<{$V(self::resolveShape($schema, $schema['shapes'][$shape['member']['shape']], $key, $history))}>",
            "structure"       => $enum ?? "array{{$V(self::implodeArrayMap($shape['members'], function ($v, $k) use ($V, $history, $key, $shape, $schema) {
                $required = in_array($k, $shape['required'] ?? [], true) ? '' : '?';
                return "{$k}{$required}:{$V(self::resolveShape($schema, $schema['shapes'][$v['shape']], $k, array_merge($history, [$key])))}";
            }, ', '))}}",
        };
    }

    private static function implodeArrayMap(array $array, callable $callback, ?string $separator): string|array
    {
        foreach ($array as $key => $value) {
            $array[$key] = $callback($value, $key);
        }
        return $separator === null ? $array : implode($separator, $array);
    }
}
