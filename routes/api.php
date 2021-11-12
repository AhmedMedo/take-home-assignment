<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Test Routes for Subscribers
 */

Route::post('test1', [\App\Http\Controllers\SubscriptionController::class, "firstSubscriber"] );
Route::post('test2', [\App\Http\Controllers\SubscriptionController::class, "secondSubscriper"] );

