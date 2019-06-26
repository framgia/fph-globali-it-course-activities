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
    return redirect()->route('suggestions.index');
});

Route::get('/suggestions', 'SuggestionController@index')->name('suggestions.index');
Route::get('/suggestions/create', 'SuggestionController@create')->name('suggestions.create');
Route::post('/suggestions', 'SuggestionController@store')->name('suggestions.store');
Route::get('/suggestions/{id}/edit', 'SuggestionController@edit')->name('suggestions.edit');