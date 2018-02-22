<?php

use Illuminate\Http\Request;

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


Route::prefix('/events')->group(function(){
    Route::get('/', 'EventsController@all');
    Route::get('/{event_id}', 'EventsController@find');
    Route::post('/', 'EventsController@all');
    Route::put('/', 'EventsController@all');
    Route::delete('/', 'EventsController@all');
});

