<?php

require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/ryunosuke/phpunit-extension/inc/bootstrap.php';

\ryunosuke\PHPUnit\Actual::generateStub(__DIR__ . '/../src/Aws/Helper', __DIR__ . '/.stub');
