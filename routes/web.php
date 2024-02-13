<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/asik', function () {
    return view('asik');
});

Route::get('/belajar', function () {
    return view('test');
});

Route::get('/coba', [CobaController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category_add', [CategoryController::class, 'add']);
Route::post('/category_save', [CategoryController::class, 'save']);




Route::get('/product', [ProductController::class, 'index']);
