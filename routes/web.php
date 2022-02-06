<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;

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


