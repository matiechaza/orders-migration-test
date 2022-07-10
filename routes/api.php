<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\V2OrderController;
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

Route::controller(OrderController::class)->group(function () {
    Route::get('v1/orders/{id}', 'show');
});

Route::controller(V2OrderController::class)->group(function () {
    Route::get('v2/orders/{id}', 'show');
});
