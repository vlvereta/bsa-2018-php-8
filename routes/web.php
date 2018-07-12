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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('currencies')->group(function () {

    Route::get('/', 'CurrencyController@showAll')->name('currencies');

    Route::get('/add', 'CurrencyController@add')->name('add-currency');

    Route::post('/', 'CurrencyController@create')->name('create-currency');

    Route::get('/{id}/edit', 'CurrencyController@edit')->name('edit-currency');

    Route::post('/{id}', 'CurrencyController@update')->name('update-currency');

    Route::delete('/', 'CurrencyController@delete')->name('delete-currency');

    Route::get('/{id}', 'CurrencyController@showById')->name('currency');
});

