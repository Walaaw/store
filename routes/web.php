<?php

use App\Http\Controllers\products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\BlogController;

use App\Post;

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


Route::get('/', [products::class, 'show_categories']);
Route::get('/home', [products::class, 'show_categories']);
Route::get('/ProductDetails/{id}',[products::class,'product_details']);
Route::get('/cat',[CategoryController::class,'list']);
Route::get('/create',[CategoryController::class,'create']);
Route::post('/save',[CategoryController::class,'save']);
Route::get('/delete/{id}',[CategoryController::class,'delete']);
Route::get('/show/{id}',[CategoryController::class,'show']);
Route::get('/edit/{id}',[CategoryController::class,'edit']);
Route::put('/SaveEdit/{id}',[CategoryController::class,'SaveEdit']);
// -------------------------------------------------------------
Route::get('/art',[ArticalController::class,'list']);
Route::get('/art/create',[ArticalController::class,'create']);
Route::post('/art/save',[ArticalController::class,'save']);
Route::get('/art/delete/{id}',[ArticalController::class,'delete']);
Route::get('/art/show/{id}',[ArticalController::class,'show']);
Route::get('/art/edit/{id}',[ArticalController::class,'edit']);
Route::put('/art/SaveEdit/{id}',[ArticalController::class,'SaveEdit']);
// -------------------------------------------------------------------
Route::get('/blog',[BlogController::class,'show']);



