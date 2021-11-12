<?php

use Illuminate\Support\Facades\Route;

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

//Subscribers Routes
Route::post('subscribe/{topic}', "SubscriptionController@subscribeToTopic");


//Publisher Routes
Route::post('publish/{topic}', "PublisherController@publishSubscription");
