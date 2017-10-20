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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','WelcomeController@index');
Route::get('/contact','WelcomeController@contact');
Route::get('/about','PagesController@about');
//Route::get('/members','MembersController@index');
//Route::get('/members/create', 'MembersController@create');
//Route::get('/members/{id}','MembersController@show');
//Route::post('/members','MembersController@store');
//Route::get('/members/{id}/edit','MembersController@edit');
//Route::patch('/members/{id}','MembersController@update');
//Route::delete('/members/{id}','MembersController@destroy');

Route::get('/','MembersController@index');

Route::resource('/members', 'MembersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home');

Route::get('/items','ItemsController@index');
Route::post('/items','ItemsController@index');
Route::get('/items/create','ItemsController@create');
Route::post('/items/','ItemsController@store');
Route::get('/items/{id}/edit','ItemsController@edit');
Route::patch('/items','ItemsController@update');
Route::delete('/items/{id}','ItemsController@destroy');

/* マイページ用にテスト */
Route::get('/mypages/{id}','MypagesController@index');



