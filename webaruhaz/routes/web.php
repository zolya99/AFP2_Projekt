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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('/shop', function(){
    return view('shop');
});
=======
Route::get('/shop', 'productController@index')->name('shop');
Route::get('/shop', 'productController@search')->name('shop.search');
Route::get('/shop', 'productController@search')->name('shop.search');
>>>>>>> main

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
