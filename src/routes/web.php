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



Route::get('/', function() {return redirect()->to("/landing");});
<<<<<<< HEAD:src/search_engine/routes/web.php


Route::get('/about', 'PageRequestController@viewAbout');
Route::get('/landing', 'PageRequestController@viewLanding');

Route::get('/post', 'PostController@viewIndex');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');


Route::get('/test', 'PageRequestController@viewTest');
=======
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/test', 'PageRequestController@viewTest');
Route::get('/about', 'PageRequestController@viewAbout');
>>>>>>> e9b2f0b33c56301a9a1de2f84ab9b41e5a31dae1:src/routes/web.php
