<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers','CustomerController@index');
Route::get('/customer','CustomerController@create');
Route::post('/customer','CustomerController@store');

Route::get('/transactions','TransactionController@index');
Route::get('/transaction','TransactionController@create');
Route::post('/transaction','TransactionController@store');