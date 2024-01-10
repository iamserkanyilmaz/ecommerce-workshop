<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('facebook/products',[ProductController::class, 'facebook_products']);
Route::get('google/products',[ProductController::class, 'google_products']);
Route::get('cimri/products',[ProductController::class, 'cimri_products']);
Route::get('n11/products',[ProductController::class, 'n11_products']);
