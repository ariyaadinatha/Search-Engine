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


Route::get('/about', 'PageRequestController@viewAbout');
Route::get('/landing', 'PageRequestController@viewLanding');

Route::get('/term', 'SearchController@term');
Route::get('/search', 'SearchController@search');
Route::post('/search/store', 'SearchController@store');
Route::get('/search/{search:search_slug}', 'SearchController@show');


Route::get('/post', 'PostController@viewIndex');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::get('/post/{post:id}', 'PostController@show');

