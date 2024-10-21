<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', action:'App\Http\Controllers\HomeController@index');

Route::get('/detail/{id}', action:'App\Http\Controllers\HomeController@detail');

Route::post('/add-to-cart', action:'App\Http\Controllers\CartController@savecart');
Route::get('/load-cart', action:'App\Http\Controllers\CartController@loadcart');
Route::get('/info-cart', action:'App\Http\Controllers\CartController@infocart');
Route::get('/list-product/{id}', action:'App\Http\Controllers\HomeController@list');
Route::get('/search', action:'App\Http\Controllers\HomeController@search');