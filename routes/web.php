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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/details', 'App\Http\Controllers\OtherController@details');


Route::get('/profile', 'App\Http\Controllers\OtherController@profile');

Route::get('/catalog', 'App\Http\Controllers\OtherController@catalog');

Route::get('/signin', 'App\Http\Controllers\OtherController@signin');

Route::get('/login', 'App\Http\Controllers\OtherController@login');

//Route::post('/postregister', [App\Http\Controllers\OtherController::class, ' postregister'])->name('postregister');

Route::post('/postregister', 'App\Http\Controllers\OtherController@postregister');

Route::post('/postlogin', 'App\Http\Controllers\OtherController@postlogin');



Route::get('logout', '\App\Http\Controllers\OtherController@logout');