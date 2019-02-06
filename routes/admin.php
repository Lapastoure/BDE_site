<?php

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

Route::get('users', 'UsersController@index')->middleware('auth', 'bde');

Route::get('products', 'ProductsController@index')->middleware('auth', 'bde');

Route::get('reports', 'ReportsController@index')->middleware('auth', 'bde');