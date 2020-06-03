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

Route::get('/categories', 'CategoryController@list')->name('category.list');
Route::get('/users', 'UserController@list')->name('user.list');
Route::post('/lessons', 'LessonController@store')->name('lesson.store');
Route::get('/lessons/{lesson}', 'LessonController@take')->name('lesson.take');
Route::get('/lessons/{lesson}/results', 'LessonController@results')->name('lesson.results');
Route::post('/lessons/{lesson}/choice/{choice}', 'LessonController@answer')->name('lesson.answer');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard/categories', 'AdminController@categories')->name('admin.categories');
    Route::get('/dashboard/users', 'AdminController@users')->name('admin.users');

    // Category CRUD
    Route::get('/dashboard/categories/create', 'CategoryController@create')->name('admin.category.create');
    Route::post('/dashboard/categories/', 'CategoryController@store')->name('admin.category.store');
    Route::get('/dashboard/categories/{category}', 'CategoryController@show')->name('admin.category.show');
    Route::get('/dashboard/categories/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
    Route::patch('/dashboard/categories/{category}', 'CategoryController@update')->name('admin.category.update');
    Route::delete('/dashboard/categories/{category}', 'CategoryController@destroy')->name('admin.category.destroy');

    // Questions / Choice CRUD
    Route::get('/dashboard/categories/{category}/questions/create', 'QuestionController@create')->name('admin.question.create');
    Route::post('/dashboard/categories/{category}/questions/', 'QuestionController@store')->name('admin.question.store');
    Route::get('/dashboard/categories/{category}/questions/{question}/edit', 'QuestionController@edit')->name('admin.question.edit');
    Route::patch('/dashboard/categories/{category}/questions/{question}', 'QuestionController@update')->name('admin.question.update');
    Route::delete('/dashboard/categories/{category}/questions/{question}', 'QuestionController@destroy')->name('admin.question.destroy');

    Route::get('/dashboard/users/create', 'UserController@create')->name('admin.user.create');
    Route::post('/dashboard/users/', 'UserController@store')->name('admin.user.store');
    Route::get('/dashboard/users/{user}/edit', 'UserController@edit')->name('admin.user.edit');
    Route::patch('/dashboard/users/{user}/', 'UserController@update')->name('admin.user.update');
    Route::delete('/dashboard/users/{user}/', 'UserController@destroy')->name('admin.user.destroy');
});
