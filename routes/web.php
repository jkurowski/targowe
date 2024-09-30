<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});
Route::middleware(['restrictIp'])->group(function () {
    Route::group(['prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
        Route::group(['namespace' => 'Front'], function () {
            Route::get('/', 'IndexController@index')->name('index');
            Route::get('/mieszkania', 'InvestmentController@show')->name('plan');

            Route::get('/o-inwestycji', 'About\IndexController@index')->name('about');

            Route::get('/galeria', 'Gallery\IndexController@index')->name('gallery');
            Route::get('/udogodnienia', 'Static\IndexController@udogodnienia')->defaults('locale', 'pl')->name('static.udogodnienia');
            Route::get('/deweloper', 'Static\IndexController@deweloper')->defaults('locale', 'pl')->name('static.deweloper');
            Route::get('/polityka-prywatnosci', 'Static\IndexController@privacy')->defaults('locale', 'pl')->name('static.polityka-prywatnosci');

            // Developro
            Route::group(['prefix'=>'/pietro', 'as' => 'front.investment.'], function() {
                // Inwestycja budynkowa

                Route::get('/budynek/{investment_id}/p/{floor}',
                    'Developro\InvestmentFloorController@index')->name('floor');

                Route::get('/budynek/{investment_id}/p/{floor}/m/{property}',
                    'Developro\InvestmentPropertyController@index')->name('property');
            });

            Route::get('/kontakt', 'ContactController@index')->name('contact.index');
            Route::post('/kontakt', 'ContactController@contact')->name('contact.form');
            Route::post('/kontakt/{property}', 'ContactController@property')->name('contact.property');


            Route::post('/clipboard', 'Clipboard\IndexController@store')->name('clipboard.store');
            Route::post('/clipboard/send', 'Clipboard\IndexController@send')->name('clipboard.send');
            Route::get('/clipboard', 'Clipboard\IndexController@index')->name('clipboard.index');
            Route::delete('/clipboard', 'Clipboard\IndexController@destroy')->name('clipboard.destroy');
        });
    });
});