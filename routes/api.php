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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// routes from Numeration module
Route::group(['as'=>'numeration.','prefix' =>'numeration'],function(){
    Route::get('',['as' =>'index','uses'=>'NumerationController@index']);
    Route::post('',['as' =>'store','uses'=>'NumerationController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'NumerationController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'NumerationController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'NumerationController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'NumerationController@restore']); // to restore numeration, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'NumerationController@forceDelete']); // to remove numeration definitely, if use softDelete
});// routes from Option module
Route::group(['as'=>'option.','prefix' =>'option'],function(){
    Route::get('',['as' =>'index','uses'=>'OptionController@index']);
    Route::post('',['as' =>'store','uses'=>'OptionController@store']);
    Route::get('/{id}',['as' =>'show','uses'=>'OptionController@show']);
    Route::put('/{id}',['as' =>'update','uses'=>'OptionController@update']);
    Route::delete('/{id}',['as' =>'destroy','uses'=>'OptionController@destroy']);
    // Route::put('update/{id}',['as' =>'restore','uses'=>'OptionController@restore']); // to restore option, if use softDelete
    // Route::delete('destroy/{id}',['as' =>'forceDelete','uses'=>'OptionController@forceDelete']); // to remove option definitely, if use softDelete
});