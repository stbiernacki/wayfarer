<?php

/*
|--------------------------------------------------------------------------
| Definition Of The Global 'API_HOST' Constant For API
|--------------------------------------------------------------------------
|
| The Swagger library is used, which does not support the 'config()' function in annotations
|
*/

$host = 'localhost';
if (isset($_SERVER['HTTP_HOST'])){
    $host = $_SERVER['HTTP_HOST'];
}
defined("API_HOST") or define("API_HOST", $host.'/api');

return [
    /*
    |--------------------------------------------------------------------------
    | list Of Languages In The Application
    |--------------------------------------------------------------------------
    |
    | Here we add the languages used in the application
    | according to the folder structure in 'resources/lang'
    |
    */

    'languages' => ['de', 'en', 'fr', 'it', 'pl'],
];
