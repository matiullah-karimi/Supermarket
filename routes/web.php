<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoryController');
Route::resource('/items', 'ItemController');
Route::get('/items/{item}/sell', 'ItemController@sell');

Route::resource('/customers', 'CustomerController');
Route::get('customers/{customer}/purchases', 'CustomerController@purchases');

Route::resource('/sales', 'SaleController');


