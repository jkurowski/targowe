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
            Route::get('/mieszkania', 'InvestmentController@index')->name('plan');
            Route::get('/mieszkania/{slug}', 'InvestmentController@show')->name('show');

            Route::get('/o-inwestycji', 'About\IndexController@index')->name('about');

            Route::get('/galeria', 'Gallery\IndexController@index')->name('gallery');
            Route::get('/udogodnienia', 'Static\IndexController@udogodnienia')->defaults('locale', 'pl')->name('static.udogodnienia');
            Route::get('/deweloper', 'Static\IndexController@deweloper')->defaults('locale', 'pl')->name('static.deweloper');
            Route::get('/polityka-prywatnosci', 'Static\IndexController@privacy')->defaults('locale', 'pl')->name('static.polityka-prywatnosci');

            Route::get('/mieszkania/{slug}/p/{floor},{floor_slug}',
                'Developro\InvestmentFloorController@index')->name('floor');

            Route::get('/mieszkania/{slug}/p/{floor},{floor_slug}/m/{property},{property_slug}',
                'Developro\InvestmentPropertyController@index')->name('property');


            Route::get('/kontakt', 'ContactController@index')->name('contact.index');
            Route::post('/kontakt', 'ContactController@contact')->name('contact.form');
            Route::post('/kontakt/{property}', 'ContactController@property')->name('contact.property');

            //Historia cen
            Route::get('/historia/{property}', 'History\IndexController@show')->name('history');
            Route::get('/przynalezne/{property}', 'History\IndexController@others')->name('others');
            Route::get('/przynalezne/{property}/show', 'History\IndexController@other')->name('others.show');
            Route::get('/przynalezne/{property}/table', 'History\IndexController@otherTable')->name('others.table');

            Route::post('/clipboard', 'Clipboard\IndexController@store')->name('clipboard.store');
            Route::post('/clipboard/send', 'Clipboard\IndexController@send')->name('clipboard.send');
            Route::get('/clipboard', 'Clipboard\IndexController@index')->name('clipboard.index');
            Route::delete('/clipboard', 'Clipboard\IndexController@destroy')->name('clipboard.destroy');

            Route::group(['prefix' => 'aktualnosci', 'as' => 'news.'], function() {
                Route::get('/',         'ArticleController@index')->name('index');
                Route::get('/{slug}',   'ArticleController@show')->name('show');
            });
        });
    });
});
