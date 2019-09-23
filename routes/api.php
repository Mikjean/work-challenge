<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
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

 // user authentication routes

 Route::post('login', 'UserController@login');
 Route::any('register', 'UserController@register');
 Route::group(['middleware' => 'auth:api'], function(){
 Route::post('details', 'UserController@details');
 });
