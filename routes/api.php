<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categories', CategoryController::class);
Route::resource('category_images', CategoryImagesController::class);
Route::resource('colors', ColorController::class);
Route::resource('products', ProductController::class);
Route::resource('product_images', ProductImagesController::class);
Route::resource('sizes', SizeController::class);
Route::resource('stocks', StockController::class);
Route::resource('traders', TraderController::class);

