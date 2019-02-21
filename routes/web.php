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

Route::get('/', 'GuestController@index')->name('index');
Route::get('/categories/{id?}', 'GuestController@categories')->name('categories');
Route::get('/product/{id}', 'GuestController@productDetail')->name('productDetail');

// admin routes
Route::prefix('admin')->group(function () {
	Auth::routes();
    Route::get('/dashboard', 'admin\DashBoardController@index')->name('dashboard');
    Route::resource('products', 'admin\ProductController');
    Route::resource('categories', 'admin\CategoryController');
});