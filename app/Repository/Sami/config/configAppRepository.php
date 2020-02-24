<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/../../../Repository/')
    ->exclude('Sami')
;

return new Sami($iterator, [
    'title' 		=> 'Wayfarer API Documentation',
    'build_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/build/',
    'cache_dir'     => __DIR__ . '/../../../../storage/apiDocumentation/docs/cache/',
]);
