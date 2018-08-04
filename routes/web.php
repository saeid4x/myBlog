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
Route::auth();
Route::get('/', 'indexController@index');
Route::get('/category/{category}','indexController@getShrotPost');


//adminController
Route::get('admin/sendPost','adminController@sendPost_get');
Route::post('admin/sendPost','adminController@sendPost_post');

Route::get('/post/{id}','indexController@getDetailPost');
Route::post('users/insertComment','indexController@insertComment');
Route::get('about','indexController@aboutMe');
Route::get('contact','indexController@contact');
Route::post('contact','indexController@contact_post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
