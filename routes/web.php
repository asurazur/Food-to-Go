<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/shop', function () { return view('shop');});
Route::view('/menu', 'layouts.menu');
Route::get('/favorites', function () { return view('favorites');});
Route::view('/canteen', 'canteen');

Route::get('/menu2', function () { return view('menu2');});
Route::get('/menu3', function () { return view('menu3');});
Route::get('/menu4', function () { return view('menu4');});
Route::get('/menu5', function () { return view('menu5');});
Route::get('/menu', [ProductController::class, 'index'])->name('menu');