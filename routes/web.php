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
Route::get('/shop', function () { return view('shop');});
Route::view('/menu', 'layouts.menu');
Route::get('/favorites', function () { return view('favorites');});
Route::view('/canteen', 'canteen');
Route::get('/menu', function () { return view('menu');});
Route::get('/menu2', function () { return view('menu2');});
Route::get('/menu3', function () { return view('menu3');});