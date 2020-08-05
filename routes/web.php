<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware(['online', 'auth'])->group(function () {
  Route::group(['prefix' => 'home', 'as' => 'home.'], static function () {
    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
    Route::get('/authOnline', 'HomeController@authOnline')->name('authOnline')->middleware('auth');
  });

  Route::group(['prefix' => 'user', 'as' => 'user.'], static function () {
    Route::get('/', 'UserController@index')->name('index')->middleware('auth', 'role:1');
    Route::get('/create', 'UserController@index')->name('create')->middleware('auth', 'role:1');
    Route::post('/store', 'UserController@index')->name('store')->middleware('auth', 'role:1');
    Route::get('/show/{id}', 'UserController@index')->name('show')->middleware('auth', 'role:1|2');
    Route::get('/edit/{id}', 'UserController@index')->name('edit')->middleware('auth', 'role:1');
    Route::post('/update/{id}', 'UserController@index')->name('update')->middleware('auth', 'role:1');
    Route::get('/delete/{id}', 'UserController@index')->name('delete')->middleware('auth', 'role:1');
  });

  Route::group(['prefix' => 'theme', 'as' => 'theme.'], static function () {
    Route::get('/edit', 'ThemeController@edit')->name('edit')->middleware('auth');
    Route::get('/update', 'ThemeController@update')->name('update')->middleware('auth');
  });
});