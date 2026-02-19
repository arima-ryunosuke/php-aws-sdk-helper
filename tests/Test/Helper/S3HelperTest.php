<?php

namespace ryunosuke\Test\Helper;

use Aws\S3\S3Client;
use ryunosuke\Aws\Helper\S3Helper;
use ryunosuke\Test\AbstractTestCase;

class S3HelperTest extends AbstractTestCase
{
    function provideHelper(?bool $throwsException = null)
    {
        $s3Client = new S3Client([
            'use_path_style_endpoint' => true,
        ]);
        $s3Helper = new S3Helper($s3Client,
            defaultBucket  : getenv('TEST_BUCKET'),
            throwsException: $throwsException ?? false,
        );

        return $s3Helper;
    }

    function test_all()
    {
        $helper = $this->provideHelper();

        # upload

        $results   = $helper->uploadObjects([
            'all/a.txt' => 'a',
            'all/b.txt' => 'b',
            'all/c.txt' => 'c',
            'all/d.txt' => 'd',
            'all/e.txt' => 'e',
        ]);
        $expecteds = [
            'all/a.txt' => '6Le+Qw==',
            'all/b.txt' => 'cb7v+Q==',
            'all/c.txt' => 'Brnfbw==',
            'all/d.txt' => 'mN1KzA==',
            'all/e.txt' => '79p6Wg==',
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['ChecksumCRC32'])->is($expecteds[$key]);
        }
        that($results->getReturn())->is(5);

        # put

        $results   = $helper->putObjects([
            'all/a.txt' => 'A',
            'all/b.txt' => 'B',
            'all/c.txt' => 'C',
            'all/d.txt' => 'D',
            'all/e.txt' => 'E',
        ]);
        $expecteds = [
            'all/a.txt' => '09meiw==',
            'all/b.txt' => 'StDPMQ==',
            'all/c.txt' => 'Pdf/pw==',
            'all/d.txt' => 'o7NqBA==',
            'all/e.txt' => '1LRakg==',
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['ChecksumCRC32'])->is($expecteds[$key]);
        }
        that($results->getReturn())->is(5);

        # copy

        $results   = $helper->copyObjects([
            'all/a.txt' => 'test2/a.txt',
            'all/b.txt' => 'test2/b.txt',
            'all/c.txt' => 'test2/c.txt',
            'all/d.txt' => 'test2/d.txt',
            'all/e.txt' => 'test2/e.txt',
        ]);
        $expecteds = [
            'all/a.txt' => null,
            'all/b.txt' => null,
            'all/c.txt' => null,
            'all/d.txt' => null,
            'all/e.txt' => null,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['ETag'])->isString();
        }
        that($results->getReturn())->is(5);

        # exist

        $results   = $helper->doObjectsExist([
            'test2/a.txt',
            'test2/b.txt',
            'test2/c.txt',
            'test2/d.txt',
            'test2/e.txt',
            'test2/X.txt',
            'test2/Y.txt',
        ]);
        $expecteds = [
            'test2/a.txt' => true,
            'test2/b.txt' => true,
            'test2/c.txt' => true,
            'test2/d.txt' => true,
            'test2/e.txt' => true,
            'test2/X.txt' => false,
            'test2/Y.txt' => false,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result)->is($expecteds[$key]);
        }
        that($results->getReturn())->is(7);

        # head

        $results   = $helper->headObjects([
            'test2/a.txt',
            'test2/b.txt',
            'test2/c.txt',
            'test2/d.txt',
            'test2/e.txt',
        ]);
        $expecteds = [
            'test2/a.txt' => '1',
            'test2/b.txt' => '1',
            'test2/c.txt' => '1',
            'test2/d.txt' => '1',
            'test2/e.txt' => '1',
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['ContentLength'])->is($expecteds[$key]);
        }
        that($results->getReturn())->is(5);

        # get

        $results   = $helper->getObjects([
            'test2/a.txt',
            'test2/b.txt',
            'test2/c.txt',
            'test2/d.txt',
            'test2/e.txt',
        ]);
        $expecteds = [
            'test2/a.txt' => 'A',
            'test2/b.txt' => 'B',
            'test2/c.txt' => 'C',
            'test2/d.txt' => 'D',
            'test2/e.txt' => 'E',
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['Body'])->is($expecteds[$key]);
        }
        that($results->getReturn())->is(5);

        # delete

        $results   = $helper->deleteObjects([
            'test2/a.txt',
            'test2/b.txt',
            'test2/c.txt',
            'test2/X.txt',
            'test2/Y.txt',
        ]);
        $expecteds = [
            'test2/a.txt' => null,
            'test2/b.txt' => null,
            'test2/c.txt' => null,
            'test2/X.txt' => null,
            'test2/Y.txt' => null,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['Key'])->is($key);
        }
        that($results->getReturn())->is(5);

        # list

        $results   = $helper->listObjects(
            'test2/',
        );
        $expecteds = [
            'test2/d.txt' => 1,
            'test2/e.txt' => 1,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result['Size'])->is($expecteds[$key]);
        }
        that($results->getReturn())->is(2);

        # tagging

        $results   = $helper->putObjectsTagging([
            'all/a.txt' => [
                ['Key' => 'a', 'Value' => 'A'],
            ],
            'all/b.txt' => [
                'b' => 'B',
            ],
            'all/c.txt' => [
                ['Key' => 'c1', 'Value' => 'C1'],
                'c2' => 'C2',
            ],
        ]);
        $expecteds = [
            'all/a.txt' => null,
            'all/b.txt' => null,
            'all/c.txt' => null,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result)->isArray();
        }
        that($results->getReturn())->is(3);

        $results   = $helper->deleteObjectsTagging([
            'all/a.txt',
            'all/d.txt',
        ]);
        $expecteds = [
            'all/a.txt' => null,
            'all/d.txt' => null,
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            that($result)->isArray();
        }
        that($results->getReturn())->is(2);

        $results   = $helper->getObjectsTagging([
            'all/a.txt',
            'all/b.txt',
            'all/c.txt',
        ]);
        $expecteds = [
            'all/a.txt' => [
                'TagSet' => [],
                'Tags'   => [],
            ],
            'all/b.txt' => [
                'TagSet' => [
                    ['Key' => 'b', 'Value' => 'B'],
                ],
                'Tags'   => [
                    'b' => 'B',
                ],
            ],
            'all/c.txt' => [
                'TagSet' => [
                    ['Key' => 'c1', 'Value' => 'C1'],
                    ['Key' => 'c2', 'Value' => 'C2'],
                ],
                'Tags'   => [
                    'c1' => 'C1',
                    'c2' => 'C2',
                ],
            ],
        ];
        foreach ($results as $key => $result) {
            that($key)->isAny(array_keys($expecteds));
            foreach ($expecteds[$key] as $k => $expected) {
                that($result[$k])->is($expected);
            }
        }
        that($results->getReturn())->is(3);
    }

    function test_throw_true()
    {
        $helper = $this->provideHelper(throwsException: true);

        $results = $helper->headObjects([
            "throw/notfound.txt",
        ]);
        that($results)->send(null)->wasThrown('404 Not Found');

        $results = $helper->getObjects([
            "throw/notfound.txt",
        ]);
        that($results)->send(null)->wasThrown('404 Not Found');

        $results = $helper->getObjectsTagging([
            "throw/notfound.txt",
        ]);
        that($results)->send(null)->wasThrown('404 Not Found');
    }

    function test_normalize()
    {
        $helper = $this->provideHelper();

        iterator_to_array($helper->putObjects([
            'normalize/X.txt' => [
                'Body'     => 'X',
                'Metadata' => [
                    'hoge' => 'Hoge',
                    'fuga' => 'Fuga',
                ],
            ],
        ]));

        $results = iterator_to_array($helper->getObjects([
            ['Key' => 'normalize/X.txt'],
        ]));
        $X       = $results['normalize/X.txt'];
        that($X)['Metadata']['hoge']->is('Hoge');
        that($X)['Metadata']['fuga']->is('Fuga');
    }

    function test_normalizeUrl()
    {
        $helper = $this->provideHelper();

        that($helper)->normalizeUrl('/path/to/object')->is([
            "Bucket" => "test-bucket",
            "Key"    => "path/to/object",
        ]);
        that($helper)->normalizeUrl('//hoge-bucket/path/to/object')->is([
            "Bucket" => "hoge-bucket",
            "Key"    => "path/to/object",
        ]);
        that($helper)->normalizeUrl('//hoge-bucket.ap-northeast-1/path/to/object')->is([
            "@region" => "ap-northeast-1",
            "Bucket"  => "hoge-bucket",
            "Key"     => "path/to/object",
        ]);
        that($helper)->normalizeUrl([])->is([
            "Bucket" => "test-bucket",
        ]);
        that($helper)->normalizeUrl(['@url' => '/path/to/object'])->is([
            "Bucket" => "test-bucket",
            "Key"    => "path/to/object",
        ]);
        that($helper)->normalizeUrl(['Bucket' => 'hoge-bucket', '@url' => '/path/to/object'])->is([
            "Bucket" => "hoge-bucket",
            "Key"    => "path/to/object",
        ]);
    }

    function test_normalizeValue()
    {
        $helper = $this->provideHelper();

        that($helper)->normalizeValue('data')->is([
            "Body" => "data",
        ]);
        that($helper)->normalizeValue(fn() => 'data')->is([
            "Body" => "data",
        ]);
        that($helper)->normalizeValue(['Body' => 'data', 'Tagging' => 'key1=value1&key2=value2'])->is([
            "Body"    => "data",
            "Tagging" => "key1=value1&key2=value2",
        ]);
    }

    function test_normalizeTags()
    {
        $helper = $this->provideHelper();

        that($helper)->normalizeTags('key1=value1&key2=value2')->is([
            "Tagging" => [
                "TagSet" => [
                    [
                        "Key"   => "key1",
                        "Value" => "value1",
                    ],
                    [
                        "Key"   => "key2",
                        "Value" => "value2",
                    ],
                ],
            ],
        ]);
        that($helper)->normalizeTags([
            [
                "Key"   => "key1",
                "Value" => "value1",
            ],
            "key2" => "value2",
        ])->is([
            "Tagging" => [
                "TagSet" => [
                    [
                        "Key"   => "key1",
                        "Value" => "value1",
                    ],
                    [
                        "Key"   => "key2",
                        "Value" => "value2",
                    ],
                ],
            ],
        ]);
        that($helper)->normalizeTags([
            "Tagging" => [
                "TagSet" => [
                    [
                        "Key"   => "key1",
                        "Value" => "value1",
                    ],
                    [
                        "Key"   => "key2",
                        "Value" => "value2",
                    ],
                ],
            ],
        ])->is([
            "Tagging" => [
                "TagSet" => [
                    [
                        "Key"   => "key1",
                        "Value" => "value1",
                    ],
                    [
                        "Key"   => "key2",
                        "Value" => "value2",
                    ],
                ],
            ],
        ]);
    }

    function test_exist_version()
    {
        $helper = $this->provideHelper();

        iterator_to_array($helper->putObjects([
            "version/X.txt" => 'X',
        ]));
        iterator_to_array($helper->deleteObjects([
            "version/X.txt",
        ]));

        $results = iterator_to_array($helper->doObjectsExist([
            "version/X.txt",
        ]));
        that($results)->is([
            "version/X.txt" => false,
        ]);
        $results = iterator_to_array($helper->doObjectsExist([
            "version/X.txt" => ['DeleteMarker' => true],
        ]));
        that($results)->is([
            "version/X.txt" => true,
        ]);
    }

    function test_get_other_bucket()
    {
        $helper  = $this->provideHelper();
        $bucket  = getenv('TEST_BUCKET');
        $bucket2 = getenv('TEST_BUCKET2');

        iterator_to_array($helper->putObjects([
            "//$bucket/other/X.txt" => 'X',
        ]));

        $results = iterator_to_array($helper->getObjects([
            "//$bucket2/other/X.txt",
        ]));
        $X       = $results['other/X.txt'];
        that($X)['Body']->is('X');
    }

    function test_copy_other_bucket()
    {
        $helper  = $this->provideHelper();
        $bucket2 = getenv('TEST_BUCKET2');

        iterator_to_array($helper->putObjects([
            'other/X.txt' => 'X',
        ]));

        iterator_to_array($helper->copyObjects([
            'other/X.txt' => ['@url' => "//$bucket2/other/Y.txt"],
        ]));
        $results = iterator_to_array($helper->getObjects([
            'other/Y.txt' => ['Bucket' => getenv('TEST_BUCKET2')],
        ]));
        $Y       = $results['other/Y.txt'];
        that($Y)['Body']->is('X');
    }

    function test_empty()
    {
        $helper = $this->provideHelper();

        that(iterator_to_array($helper->listObjects('/notfound-bucket')))->isEmpty();

        that(iterator_to_array($helper->doObjectsExist([])))->isEmpty();
        that(iterator_to_array($helper->headObjects([])))->isEmpty();
        that(iterator_to_array($helper->getObjects([])))->isEmpty();
        that(iterator_to_array($helper->putObjects([])))->isEmpty();
        that(iterator_to_array($helper->uploadObjects([])))->isEmpty();
        that(iterator_to_array($helper->copyObjects([])))->isEmpty();
        that(iterator_to_array($helper->deleteObjects([])))->isEmpty();

        that(iterator_to_array($helper->getObjectsTagging([])))->isEmpty();
        that(iterator_to_array($helper->putObjectsTagging([])))->isEmpty();
        that(iterator_to_array($helper->deleteObjectsTagging([])))->isEmpty();
    }

    function test_many_bucket()
    {
        $helper = $this->provideHelper();

        $logs    = [];
        $results = $helper->putObjects((function () use (&$logs) {
            for ($i = 1; $i <= 1024; $i++) {
                $logs[] = "start:$i";
                yield "many/$i.txt" => $i;
            }
        })(), 24);
        foreach ($results as $key => $result) {
            $logs[] = "end:$key";
        }
        that($results->getReturn())->is(1024);
        //echo implode("\n", $logs);
        // starts soon
        that(array_slice($logs, 0, 24))->eachStringStartsWith('start:');
        // generally alternating
        that($logs[24])->stringStartsWith('end:many/');
        that($logs[25])->is('start:25');
        that($logs[26])->stringStartsWith('end:many/');
        that($logs[27])->is('start:26');
        that($logs[28])->stringStartsWith('end:many/');
        that($logs[29])->is('start:27');
        // end consecutively
        that(array_slice($logs, -24))->eachStringStartsWith('end:');

        $logs    = [];
        $results = $helper->deleteObjects((function () use (&$logs) {
            for ($i = 1; $i <= 1024; $i++) {
                $logs[] = "start:$i";
                yield "many/$i.txt";
            }
        })(), 24);
        foreach ($results as $key => $result) {
            $logs[] = "end:$key";
        }
        that($results->getReturn())->is(1024);
        //echo implode("\n", $logs);
        // starts soon
        that(array_slice($logs, 0, 24))->eachStringStartsWith('start:');
        // end consecutively
        that(array_slice($logs, -1024 % 24))->eachStringStartsWith('end:');
    }
}
