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


/*----------------------------------- Front -----------------------------------------------*/
Route::get('/', 'Front\IndexController@index')->name('entry');
Route::get('/post/{slug}', 'Front\PostController@index')->name('post');
//Route::get('/post/{slug}', 'Front\PostController@index')->where('slug', '[A-Za-z0-9]+');
Route::get('/s', 'Front\SearchController@index');
Route::get('/tag/{item}', 'Front\TagController@index')->name('tag');





/*----------------------------------- Backend -----------------------------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
