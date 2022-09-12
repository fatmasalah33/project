<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\ProductController;
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

Route::get('/', [LoginController::class,'index']);
Route::post('/login-user', [LoginController::class,'loginuser'])->name('loginuser');
Route::get('logout',[LoginController::class,'logout']);
Route::prefix('/dashboard')->middleware('IsLoggedIn')->group(function (){
    Route::get('/', [CatController::class,'index']);
    Route::get('/categories', [CatController::class,'index']);
    Route::get('/product/cat/{cat}',[ProductController::class,'cat']);
    Route::get('/product/categories',[ProductController::class,'categories']);
    Route::get('/product/index/{cat}',[ProductController::class,'index']);
    Route::post('/product/store',[ProductController::class,'store']);
});
