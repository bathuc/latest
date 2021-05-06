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
Route::get('/', 'HomeController@index')->name('home');
Route::match(['get', 'post'], '/test', 'TestController@test')->name('test');

Route::get('/eloquent', 'EloquentController@eloquent')->name('eloquent');
Route::group(['prefix' => 'bootstrap'], function () {
    Route::get('/jum', 'BootstrapController@jum')->name('bootstrap.jum');
    Route::get('/class', 'BootstrapController@classUtility')->name('bootstrap.class');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
});

Route::match(['get', 'post'], '/convert', 'HomeController@convertText')->name('convert-text');