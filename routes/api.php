<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group.
|
*/

Route::group(['middleware' => ['api']], function () {
    //__ Stock Status
    Route::post('stockStatuses/batch', 'StockStatusesController@batch');
    Route::resource('stockStatuses', 'StockStatusesController', ['only' => ['index', 'store', 'update']]);
});
