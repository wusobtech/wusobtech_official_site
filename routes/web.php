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
Route::get('/our-blog', 'WebController@blogsView')->name('our_blog');
Route::get('post/{id}/{slug}', 'WebController@blog_info')->name('blog_info');
Route::match(['post','get'],'/admin/login', 'AdminController@login')->name('Adminlogin');

Auth::routes(['register' => false , 'login' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']],function(){
    Route::get('/logout','AdminController@logout')->name('logout');

    Route::prefix('admin')->group(function(){
    Route::get('dashboard', 'AdminController@dashboard')->name('admin');
        Route::prefix('blog')->as('blog.')->group(function(){
            Route::resource('categories', 'BlogCategoryController');
            Route::resource('posts', 'BlogController');
        });
    });

});

