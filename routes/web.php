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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard/categories', 'AdminController@categories')->name('admin.categories');
    Route::get('/dashboard/users', 'AdminController@users')->name('admin.users');

    Route::get('/dashboard/categories/create', 'CategoryController@create')->name('admin.category.create');
    Route::post('/dashboard/categories/', 'CategoryController@store')->name('admin.category.store');
    Route::get('/dashboard/categories/{category}', 'CategoryController@show')->name('admin.category.show');
    Route::get('/dashboard/categories/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
    Route::patch('/dashboard/categories/{category}', 'CategoryController@update')->name('admin.category.update');
    Route::delete('/dashboard/categories/{category}', 'CategoryController@destroy')->name('admin.category.destroy');

    Route::get('/dashboard/categories/{category}/questions/create', 'QuestionController@create')->name('admin.question.create');
    Route::post('/dashboard/categories/{category}/questions/', 'QuestionController@store')->name('admin.question.store');
});
