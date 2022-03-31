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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\User\WebController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\User\WebController::class, 'services'])->name('services');
Route::get('/portfolio', [App\Http\Controllers\User\WebController::class, 'portfolio'])->name('portfolio');
Route::get('/webblog', [App\Http\Controllers\User\WebController::class, 'webblog'])->name('webblog');
Route::get('/faq', [App\Http\Controllers\User\WebController::class, 'faq'])->name('faq');

Route::get('/contactus', 'App\Http\Controllers\User\OfferController@index')->name('offer.all');

##################### Begin Payment #########################
Route::group(['prefix'=>'offers', 'namespace'=>'App\Http\Controllers\User', 'middleware'=>'auth'], function(){
    Route::get('/details/{halls_id}', 'OfferController@show')->name('offer.show');

    Route::get('/getcheckoutid', 'PaymentController@getCheckoutId')->name('offers.checkout');

});
##################### End Payment #########################
############################ begin invoices#######################
Route::group(['prefix'=>'invoices', 'namespace'=>'App\Http\Controllers\User', 'middleware'=>'auth'], function(){
    Route::get('/', 'InvoiceController@index')->name('invoice.index');
    Route::get('/show/{id}', 'InvoiceController@show')->name('invoice.show');

});
#############################end invoces#########################
