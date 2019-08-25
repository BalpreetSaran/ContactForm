<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

// Auth::routes();
Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);


Route::get('/', 'formController@create');
Route::post('/', 'formController@store');
Route::get('/home', 'formController@search')->middleware('auth');
