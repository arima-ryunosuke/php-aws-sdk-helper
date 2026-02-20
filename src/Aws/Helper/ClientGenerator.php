<?php
namespace ryunosuke\Aws\Helper;

use Generator;
use ReflectionClass;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

class ClientGenerator
{
    public static function generate(array $services = []): Generator
    {
        $V = fn($v) => $v;

        $vendorDirectory = array_filter([__DIR__ . '/../../../vendor/', __DIR__ . '/../../../../../'], 'file_exists');
        $dataDirectory   = reset($vendorDirectory) . '/aws/aws-sdk-php/src/data';
        $outputDirectory = __DIR__ . '/../Client';

        $currents = array_flip(array_map('realpath', glob("$outputDirectory/*.php")));

        $manifests = require $manifestFile = realpath("$dataDirectory/manifest.json.php");
        yield "load $manifestFile";
        foreach ($manifests as $id => $manifest) {
            $matches = !$services;
            foreach ($services as $service) {
                if (fnmatch($service, $manifest['namespace'], FNM_CASEFOLD)) {
                    $matches = true;
                }
            }
            if (!$matches) {
                continue;
            }
            $version = $manifest['versions']['latest'];
            $schema  = require $api2File = realpath("$dataDirectory/$id/$version/api-2.json.php");
            yield "load $api2File";

            $shapes = self::implodeArrayMap($schema['shapes'], function ($shape, $shapeId) use ($schema) {
                if (!in_array($shape['type'], ["map", "list", "structure"], true)) {
                    return null;
                }
                $type = self::resolveShape($schema['shapes'], $shapeId);
                return strtr(" * @psalm-type $shapeId = $type", ["\n" => "\n * "]);
            }, null);
            $shapes = array_filter($shapes, fn($type) => $type !== null);

            $methods = [];
            foreach ($schema['operations'] as $operation) {
                $required = !!(($schema['shapes'][$operation['input']['shape'] ?? null] ?? null)['required'] ?? []);
                $param    = $operation['input']['shape'] ?? null;
                $return   = $operation['output']['shape'] ?? null;

                $break = false;
                foreach ([
                    ''      => ['\\' . \Aws\Result::class],
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

            $nameSpace = "Aws\\{$manifest['namespace']}";
            $className = "{$manifest['namespace']}Client";

            $implements = [];
            $uses       = [];
            if (class_exists("$nameSpace\\$className")) {
                $implements = array_map(fn($v) => "\\$v", class_implements("$nameSpace\\$className"));
                $uses       = array_map(fn($v) => "\\$v", class_uses("$nameSpace\\$className"));
            }

            file_put_contents("$outputDirectory/$className.php", <<<PHP
                <?php
                namespace $nameSpace;
                
                /**
                {$V(implode("\n", $shapes))}
                 */
                class $className extends \\Aws\\AwsClient{$V($implements ? " implements {$V(implode(', ', $implements))}" : "")}
                {
                {$V($uses ? "    use {$V(implode(', ', $uses))};\n" : "")}
                {$V(implode("\n\n", $methods))}
                }

                PHP,);
            yield "save " . ($classFile = realpath("$outputDirectory/$className.php"));
            unset($currents[$classFile]);
        }

        foreach ($currents as $current => $ignored) {
            unlink($current);
            yield "unlink $current";
        }
    }

    public static function resolveType(string $className): array
    {
        $vendorDirectory = array_filter([__DIR__ . '/../../../vendor/', __DIR__ . '/../../../../../'], 'file_exists');
        $dataDirectory   = reset($vendorDirectory) . '/aws/aws-sdk-php/src/data';

        $manifests = [];
        foreach (require "$dataDirectory/manifest.json.php" as $id => $manifest) {
            $manifests[$manifest['namespace']] = array_merge(['id' => $id], $manifest);
        }

        $refclass = new ReflectionClass($className);
        $filename = $refclass->getFileName();
        $contents = file_get_contents($filename);

        static $services = [];

        $results = [];
        preg_match_all('#@psalm-import-type\s+(.+?)\s+from\s+(.+)#m', $contents, $matches, PREG_SET_ORDER);
        foreach ($matches as [, $type, $client]) {
            [, $service] = explode('\\', trim($client, '\\'));

            $services[$service] ??= (function () use ($manifests, $service, $dataDirectory) {
                $manifest = $manifests[$service];
                $id       = $manifest['id'];
                $version  = $manifest['versions']['latest'];
                $schema   = require $api2File = realpath("$dataDirectory/$id/$version/api-2.json.php");

                return self::implodeArrayMap($schema['shapes'], function ($shape, $shapeId) use ($schema) {
                    if (!in_array($shape['type'], ["map", "list", "structure"], true)) {
                        return null;
                    }
                    $type = self::resolveShape($schema['shapes'], $shapeId, true);
                    return strtr("$type", ["\n" => "\n * "]);
                }, null);
            })();

            if (isset($services[$service][$type])) {
                $results[$type] = $services[$service][$type];
            }
        }

        return $results;
    }

    private static function resolveShape(array $shapes, string $shapeId, bool $deep = false, int $nest = 0): ?string
    {
        $shape = $shapes[$shapeId];

        if (!$deep && $nest > 0 && in_array($shape['type'], ["map", "list", "structure"], true)) {
            return $shapeId;
        }

        $V       = fn($v) => $v;
        $indent0 = str_repeat(" ", ($nest + 0) * 4);
        $indent1 = str_repeat(" ", ($nest + 1) * 4);

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
            "map"             => $enum ?? "array<{$V(self::resolveShape($shapes, $shape['key']['shape'], $deep, $nest + 1))}, {$V(self::resolveShape($shapes, $shape['value']['shape'], $deep, $nest + 1))}>",
            "list"            => $enum ?? "array|list<{$V(self::resolveShape($shapes, $shape['member']['shape'], $deep, $nest + 1))}>",
            "structure"       => $enum ?? "array{{$V(self::concatStrings(
                "\n",
                "{$V(self::implodeArrayMap($shape['members'], function ($v, $k) use ($V, $shapes, $shape, $deep, $nest, $indent1) {
                    $required = in_array($k, $shape['required'] ?? [], true) ? '' : '?';
                    return "$indent1{$k}{$required}: {$V(self::resolveShape($shapes, $v['shape'], $deep, $nest + 1))},";
                }, "\n"))}",
                "\n{$indent0}",
            ))}}",
        };
    }

    private static function implodeArrayMap(array $array, callable $callback, ?string $separator): string|array
    {
        foreach ($array as $key => $value) {
            $array[$key] = $callback($value, $key);
        }
        return $separator === null ? $array : implode($separator, $array);
    }

    private static function concatStrings(string ...$strings): string
    {
        if (count($strings) > count(array_filter($strings, 'strlen'))) {
            return "";
        }
        return implode("", $strings);
    }
}
