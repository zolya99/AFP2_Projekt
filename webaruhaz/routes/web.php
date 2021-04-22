<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

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

Route::get('/shop', [App\Http\Controllers\productController::class, 'index'])->name('shop');

Auth::routes();
Route::get('/profile',[App\Http\Controllers\userController::class, 'index'])->name('profile');

Route::get('/profile/edit',[profileController::class, 'index'])->name('profile_edit');

Route::post('/profile/update', [profileController::class, 'update'])->name('profile.update');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
