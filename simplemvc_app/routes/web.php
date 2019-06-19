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
    return redirect()->route('create');
});

Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create')->name('create');
Route::post('/books', 'BookController@store');
Route::get('/books/{id}', 'BookController@show')->name('show');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}', 'BookController@update');