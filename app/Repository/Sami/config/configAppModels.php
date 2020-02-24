<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/../../../Models/')
;

return new Sami($iterator, [
    'title' 		=> 'APS API Documentation',
    'build_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/build/',
    'cache_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/cache/',
]);
