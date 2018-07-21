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
Route::get('/','HomeController@index');
Route::get('/index','HomeController@index');
Route::get('/about','AboutController@index');
Route::get('/projects','ProductsController@index');
Route::get('/services','ServicesController@index');
Route::get('/news','NewsController@index');
Route::get('/contact','ContactController@contact');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::resource('/contacts','ContactController');

});
Auth::routes();

Route::get('/admin', 'DashboardController@index')->name('dashboard');
