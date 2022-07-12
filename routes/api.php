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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'sub'], function() {
    Route::get('/',             'SubscriptionController@index');
    Route::post('/',      'SubscriptionController@store');
    Route::get('/edit/{id}',   'SubscriptionController@edit');
    Route::post('/update/{id}',  'SubscriptionController@update');
    // Route::delete('/delete',    'SubscriptionController@deleteOne');
    
});
