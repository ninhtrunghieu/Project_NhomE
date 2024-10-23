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

Route::get('/login-admin', action:'App\Http\Controllers\AuthController@login_index');
Route::post('/login-admin', action:'App\Http\Controllers\AuthController@login_post');

Route::get('/detail/{id}', action:'App\Http\Controllers\HomeController@detail');
Route::get('/admin', function () {
    $user = Session::get('user_admin');
    if(!$user){
        return redirect('/login-admin');
    }
    else{
        return view('admin');
    }
    return view('admin');
});

Route::post('/add-to-cart', action:'App\Http\Controllers\CartController@savecart');
Route::get('/load-cart', action:'App\Http\Controllers\CartController@loadcart');
Route::get('/cart-detail', action:'App\Http\Controllers\CartController@detailcart');
Route::get('/info-cart', action:'App\Http\Controllers\CartController@infocart');
Route::get('/list-product/{id}', action:'App\Http\Controllers\HomeController@list');
Route::get('/login', action:'App\Http\Controllers\CustomerController@login_index');
Route::post('/login-post', action:'App\Http\Controllers\CustomerController@login_post');
Route::post('/update-cart', action:'App\Http\Controllers\CartController@update_cart');
Route::get('/delete-p/{session_id}', action:'App\Http\Controllers\CartController@delete_cart');
Route::get('/delete-all-p', action:'App\Http\Controllers\CartController@delete_all_product');

Route::get('/register', action:'App\Http\Controllers\CustomerController@register_index');
Route::get('/user-order', action:'App\Http\Controllers\CustomerController@get_order');
Route::post('/register-post', action:'App\Http\Controllers\CustomerController@register_post');

Route::get('/logout', action:'App\Http\Controllers\CustomerController@logout');
Route::get('/dashboard/index', action:'App\Http\Controllers\DashboardController@index');
Route::post('/dashboard/get', action:'App\Http\Controllers\DashboardController@get');

Route::get('/search', action:'App\Http\Controllers\HomeController@search');

Route::get('/user-info', action:'App\Http\Controllers\CustomerController@userinfo');
Route::get('/order-info', action:'App\Http\Controllers\CustomerController@get_order');
Route::get('/order-trash/{id}', action:'App\Http\Controllers\OrderController@trash');
Route::prefix('orders')->group(function () {
    Route::post('/save-order', [
    	'as'=>'orders.save',
    	'uses'=>'App\Http\Controllers\OrderController@save'
    ]);
    Route::post('/change-status', [
    	'as'=>'orders.status',
    	'uses'=>'App\Http\Controllers\OrderController@change'
    ]);
    Route::get('/export-to-word/{id}', [
    	'as'=>'orders.export',
    	'uses'=>'App\Http\Controllers\OrderController@exporttoword'
    ]);
    Route::get('/index', [
    	'as'=>'orders.index',
    	'uses'=>'App\Http\Controllers\OrderController@index'
    ]);
});

Route::prefix('categories')->group(function () {
    Route::get('/index', [
    	'as'=>'categories.index',
    	'uses'=>'App\Http\Controllers\CategoryController@index'
    ]);
    Route::get('/create', [
    	'as'=>'categories.create',
    	'uses'=>'App\Http\Controllers\CategoryController@create'
    ]);
    Route::post('/save', [
    	'as'=>'categories.save',
    	'uses'=>'App\Http\Controllers\CategoryController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'categories.edit',
    	'uses'=>'App\Http\Controllers\CategoryController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'categories.saveedit',
    	'uses'=>'App\Http\Controllers\CategoryController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'categories.delete',
    	'uses'=>'App\Http\Controllers\CategoryController@delete'
    ]);
});

Route::prefix('statistics')->group(function () {
    Route::get('/index', [
    	'as'=>'statistics.index',
    	'uses'=>'App\Http\Controllers\StatisticalController@index'
    ]);
    Route::get('/create', [
    	'as'=>'statistics.create',
    	'uses'=>'App\Http\Controllers\StatisticalController@create'
    ]);
    Route::post('/save', [
    	'as'=>'statistics.save',
    	'uses'=>'App\Http\Controllers\StatisticalController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'statistics.edit',
    	'uses'=>'App\Http\Controllers\StatisticalController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'statistics.saveedit',
    	'uses'=>'App\Http\Controllers\StatisticalController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'statistics.delete',
    	'uses'=>'App\Http\Controllers\StatisticalController@delete'
    ]);
});

Route::prefix('products')->group(function () {
    Route::get('/index', [
    	'as'=>'products.index',
    	'uses'=>'App\Http\Controllers\ProductController@index'
    ]);
    Route::get('/create', [
    	'as'=>'products.create',
    	'uses'=>'App\Http\Controllers\ProductController@create'
    ]);
    Route::post('/save', [
    	'as'=>'products.save',
    	'uses'=>'App\Http\Controllers\ProductController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'products.edit',
    	'uses'=>'App\Http\Controllers\ProductController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'products.saveedit',
    	'uses'=>'App\Http\Controllers\ProductController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'products.delete',
    	'uses'=>'App\Http\Controllers\ProductController@delete'
    ]);
});
