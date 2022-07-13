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


Route::group(['prefix' => 'payments'], function() {
    Route::get('/',             'SubscriptionController@index')->name('api.payments.index');
    Route::post('/',      'SubscriptionController@store')->name('api.payments.store');
    Route::get('/edit/{id}',   'SubscriptionController@edit')->name('api.payments.edit');
    Route::post('/update/{id}',  'SubscriptionController@update')->name('api.payments.update');
    // Route::delete('/delete',    'SubscriptionController@deleteOne');
    
});