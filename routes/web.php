<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('auth')->group(function () {
 // products Routes
 Route::get('products', [ProductController::class, 'index']) ;
 Route::get('products/create', [ProductController::class, 'create']);
 Route::post('products/store', [ProductController::class, 'store']);
 Route::get('products/edit/{id}', [ProductController::class, 'edit']);
 Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
 Route::post('products/update/{id}', [ProductController::class, 'update']);
// categories Routes
 Route::get('categories', [CategoryController::class, 'indexC']);
 Route::get('categories/createC', [CategoryController::class, 'createC']);
 Route::post('categories/storeC', [CategoryController::class, 'storeC']);
 Route::get('categories/editC/{id}', [CategoryController::class, 'editC']);
 Route::get('categories/deleteC/{id}', [CategoryController::class, 'destroyC']);
 Route::post('categories/updateC/{id}', [CategoryController::class, 'updateC']);
});
 // Front Routes
 Route::get('/',[FrontController::class, 'index']
 );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
