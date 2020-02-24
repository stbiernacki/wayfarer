<?php

/*
|--------------------------------------------------------------------------
| Website Routes Section
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return view('websites.pages.welcome'); })->name('welcome');
Route::get('/about', function () { return view('websites.pages.about'); })->name('about');
Route::get('/contact', function () { return view('websites.pages.contact'); })->name('contact');
Route::get('/page', function () { return view('websites.pages.page'); })->name('page');

/*
|--------------------------------------------------------------------------
| Auth Routes Section
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Administration Routes Section
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    //__ Api
    Route::get('apiUsers/datatable', 'ApiUser\ApiUsersController@datatable')
        ->name('apiUsers.datatable');
    Route::resource('apiUsers', 'ApiUser\ApiUsersController');

    //__ Data Export
    Route::resource('/dataExports', 'DataExports\DataExportsController');

    //__ Home
    Route::get('/home', 'Home\HomeController@index')
        ->name('home');
        //__ Performance (revenue)
        Route::get('/performances/getThisYear', 'Home\PerformancesController@getThisYear')
            ->name('performances.getThisYear');
        Route::get('/performances/getSpanningDays', 'Home\PerformancesController@getSpanningDays')
            ->name('performances.getSpanningDays');

    //__ Sales
    Route::resource('/sales', 'Sales\SalesController');

    //__ Settings
    Route::resource('/settings', 'Settings\SettingsController');

    //__ Stock Status
    Route::get('stockStatus/datatable', 'StockStatus\StockStatusController@datatable')
        ->name('stockStatus.datatable');
    Route::resource('/stockStatus', 'StockStatus\StockStatusController');
});
