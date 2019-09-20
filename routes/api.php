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

// student crud routes

 Route::post('/student', "APIcontroller@create");
 Route::get('/students', "APIcontroller@show");
 Route::get('/student/{id}', "APIcontroller@showById");
 Route::put('/studentupdate/{id}', "APIcontroller@updateStudent");
 Route::delete('/studentdelete/{id}', "APIcontroller@deleteStudent");

 // student authentication routes

 Route::post('login', 'UserController@login');
 Route::any('register', 'UserController@register');
 Route::group(['middleware' => 'auth:api'], function(){
 Route::post('details', 'UserController@details');
 });
