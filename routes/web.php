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

Route::get('/', 'CustomerController@showCustomers')->name('show');

Route::get('/{id}/delete', 'CustomerController@delete')->name('del');
Route::get('/add', 'CustomerController@create')->name('create');
Route::get('/{id}edit','CustomerController@update')->name('update');

Route::post('/add', 'CustomerController@add')->name('add');
Route::post('/delete', 'CustomerController@destroy')->name('destroy');

