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
define('pagination_count', 10);

Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'admin'], function(){
    #########################start halls###########################3
    Route::get('/home', 'DashboardController@index')->name('dashboard');
    Route::get('/create', 'DashboardController@create')->name('admin.create');
    Route::post('/store', 'DashboardController@store')->name('admin.store');
    Route::get('/edit/{id}', 'DashboardController@edit')->name('admin.edit');
    Route::post('/update/{id}', 'DashboardController@update')->name('admin.update');
    Route::get('/delete/{id}', 'DashboardController@delete')->name('admin.delete');
    Route::get('/show/{id}', 'DashboardController@show')->name('admin.show');
    #########################end halls###########################3

    Route::get('/users', 'UserController@index')->name('admin.users');
    Route::get('/users/status/{id}', 'UserController@changeUserStatus')->name('admin.users.status');

    //Route::get('/requests', 'RequestController@index')->name('admin.requests');
    #################### start blog################
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/create', 'BlogController@create')->name('create.blog');
    Route::post('/blog/store', 'BlogController@store')->name('store.blog');
    Route::get('/blog/edit/{id}', 'BlogController@edit')->name('edit.blog');
    Route::post('/blog/update/{id}', 'BlogController@update')->name('update.blog');
    Route::get('/blog/delete/{id}', 'BlogController@delete')->name('delete.blog');
    ######################end blog##############
    ##########################start payment########################
    Route::get('/payment', 'PaymentController@index')->name('payment');

    ########################end payment#########################

});
