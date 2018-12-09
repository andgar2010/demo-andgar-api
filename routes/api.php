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

Route::apiResource('categories', 'CategoryController');
Route::group(['prefix'=>'categories'],function(){
        Route::apiResource('/{category}/restaurants','RestaurantController');
});



// // V1 API 
// Route::group(['prefix' => 'v1'], function () {
//     // Route::apiResource('categories', 'CategoryController@getCategory', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

//     Route::apiResource('restaurants', 'RestaurantController');
// });
// // END V1 API 


// // V2 API
// Route::group(['prefix' => 'v2'], function () {
//     // Route::apiResource('categories-profile', 'CategoryController@getUser');
//     // Route::get('users/names', 'UserController@names');

//  // Category
//     Route::apiResource('categories', 'CategoryController');
//     Route::apiResource('categories/names', 'CategoryController@names');
//  Route::group(['prefix'=>'categories'],function(){
//      Route::apiResource('/{category}/restaurants','RestaurantController');
//  });
    
//     // Restaurant
//     Route::apiResource('restaurants', 'RestaurantController');
//     Route::apiResource('restaurants/names', 'RestaurantController@names');

// });
// // END V2 API