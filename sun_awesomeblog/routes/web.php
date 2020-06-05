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

Route::get('/users', 'UserController@index')->name('user.list');
Route::get('/users/{user}', 'UserController@show')->name('user.show');
Route::get('/users/{user}/edit-profile', 'UserController@editProfile')->name('user.profile.edit');
Route::patch('/users/{user}/', 'UserController@updateProfile')->name('user.profile.update');

Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}/', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}/', 'PostController@destroy')->name('post.destroy');

Route::post('/users/{user}/follow', 'UserController@follow')->name('user.follow');
Route::delete('/users/{user}/unfollow', 'UserController@unfollow')->name('user.unfollow');
Route::get('/users/{user}/followers', 'UserController@followers')->name('user.followers');
Route::get('/users/{user}/following', 'UserController@following')->name('user.following');