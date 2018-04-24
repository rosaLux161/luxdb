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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');//->middleware('auth'); für Authentifizierung

Route::get('/customer/new', 'PagesController@newcustomer');

Route::post('/customer/new', 'PagesController@savecustomer');

Route::get('/customer/show', 'PagesController@newcustomer');