<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/../../../../app/')
    ->exclude(['Console', 'Exceptions', 'Providers', 'Http/Middleware', 'Http/Kernel.php'])
;

return new Sami($iterator, [
    'title' 		=> 'API Documentation',
    'build_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/build/',
    'cache_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/cache/',
]);
