<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/product/{product:slug}/detail', [HomeController::class, 'detail']);

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);




Route::get('/register', [RegisterController::class, 'showRegistrationForm']);


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/category', [CategoryController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryController::class, 'create']);
Route::get('/dashboard/category/checkSlug', [CategoryController::class,'checkSlug']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/dashboard/category/{slug}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{slug}', [CategoryController::class, 'update']);
Route::delete('/category/{slug}', [CategoryController::class, 'destroy']);


Route::get('/dashboard/product', [ProductController::class, 'index']);
Route::get('/dashboard/product/create', [ProductController::class, 'create']);
Route::get('/dashboard/product/checkSlug', [ProductController::class,'checkSlug']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/dashboard/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
