<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OtherControllers;
use App\Http\Controllers\ProductController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Index
Route::get('/', [HomeController::class, 'index']);

//Products
Route::get('/products', [ProductController::class, 'prods']);
Route::prefix('products')->group(function () {
    Route::get('/product1', [ProductController::class, 'prod1']);
    Route::get('/product2', [ProductController::class, 'prod2']);
});

//News Parameter
Route::get('/news/{id?}', [NewsController::class, 'news']);

//Program prefix
Route::get('/program', [OtherControllers::class, 'program']);
Route::prefix('/program')->group(function () {
    Route::get('/program1', [OtherControllers::class, 'program1']);
    Route::get('/program2', [OtherControllers::class, 'program2']);
});

//about us biasa
Route::get('/about', [OtherControllers::class, 'aboutus']);


//cntact us resouce
Route::resource('/contact', ContactController::class);