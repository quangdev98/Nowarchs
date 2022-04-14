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

Route::get('/', 'UserController@index')->name('user.index');
// Route::prefix('user')->group(function() {
//     Route::get('/', 'UserController@index');
    Route::get('/about', 'AboutController@index')->name('user.about');
    Route::get('/services', 'ServiceController@index')->name('user.service');
    Route::prefix('projects')->group(function () {
        Route::get('/', 'ProjectController@index')->name('user.project.index');
        Route::get('/detail', 'ProjectController@show')->name('user.project.show');
    });
    Route::prefix('blogs')->group(function () {
        Route::get('/', 'BlogController@index')->name('user.blog.index');
        Route::get('/detail', 'BlogController@show')->name('user.blog.show');
    });
    Route::get('/contact', 'ContactController@index')->name('user.contact');
// });
