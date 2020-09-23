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
Route::get('/eloquent', 'EloquentController@eloquent')->name('eloquent');
Route::get('/jum', 'BootstrapController@jum')->name('bootstrap.jum');
