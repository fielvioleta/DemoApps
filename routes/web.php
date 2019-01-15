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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();


// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'admin\DashBoardController@index')->name('dashboard');
    
    Route::resource('products', 'admin\ProductController');
    Route::resource('categories', 'admin\CategoryController');
});