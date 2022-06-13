<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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
Route::apiResource('customers',CustomerController::class);
Route::apiResource('products', ProductController::class);

Route::get('posts', [PostController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('cart/count', [CartController::class, 'count'])
        ->name('cart.count');
    Route::put('cart/decrease/{rowId}', [CartController::class, 'decreaseQuantity'])
        ->name('api.cart.decrease');
    Route::put('cart/increase/{rowId}', [CartController::class, 'increaseQuantity'])
        ->name('api.cart.increase');
    Route::apiResource('cart', CartController::class);
});
