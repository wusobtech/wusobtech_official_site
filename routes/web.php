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

Route::get('/', 'WebController@index');
Route::get('/about-us', 'WebController@aboutUs')->name('aboutUs');
Route::get('/contact-us', 'WebController@contactUs')->name('contactUs');
Route::get('/services', 'WebController@services')->name('services');
Route::get('/blogs', 'WebController@blogs')->name('blogs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

