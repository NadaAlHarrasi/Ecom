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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//الطريقة الأولى
Route::get('products','ProductsController@index');
Route::get('products/create','ProductsController@create');
Route::get('products/edit/{id}','ProductsController@edit');
Route::get('products/delete/{id}','ProductsController@destroy');
Route::post('products/update/{id}','ProductsController@update');
Route::post('products/store','ProductsController@store');

// الطريقة الثانية
// Route::prefix('products')->group(function(){
//     Route::get('/','ProductsController@index');
//     Route::get('create','ProductsController@create');
//     Route::get('edit/{id}','ProductsController@edit');
//     Route::get('delete/{id}','ProductsController@destroy');
//     Route::post('update/{id}','ProductsController@update');
//     Route::post('store','ProductsController@store');
    
// });

