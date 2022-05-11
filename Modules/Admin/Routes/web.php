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

Route::middleware('web')->group(function () {
    Route::get('/login', 'AuthController@getLogin')->name('admin.auth.login');
    Route::post('/login', 'AuthController@authenticate')->name('admin.auth.authenticate');
    Route::get('/logout', 'AuthController@logout')->name('admin.auth.logout');

    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        // profile
        Route::prefix('profile/{id}')->group(function () {
            Route::get('detail', 'ProfileController@show')->name('admin.profile.show');
        });

        Route::prefix('categories')->group(function () {
            Route::get('/', 'CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
            Route::post('/create', 'CategoryController@store')->name('admin.categories.store');
            Route::post('/update/{id}', 'CategoryController@update')->name('admin.categories.update');
            Route::post('/destroy/{id}', 'CategoryController@destroy')->name('admin.categories.delete');
        });

        Route::prefix('product')->group(function () {
            Route::get('/', 'ProductController@index')->name('admin.product.index');
            Route::get('/create', 'ProductController@create')->name('admin.product.create');
            Route::post('/create', 'ProductController@store')->name('admin.product.store');
            Route::get('/update/{id}', 'ProductController@edit')->name('admin.product.edit');
            Route::post('/update/{id}', 'ProductController@update')->name('admin.product.update');
            Route::post('/destroy/{id}', 'ProductController@destroy')->name('admin.product.delete');
        });
        Route::prefix('ajax')->group(function () {
            Route::post('/formStatus', 'AjaxController@formStatus')->name('admin.ajax.status');
        });
    });
});
