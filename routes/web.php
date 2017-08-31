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


/* ------------------------------ Front-end ------------------------------ */

Route::get('/', 'Front\IndexController@index')->name('entry');

Route::get('/post/{slug}', 'Front\PostController@index')->name('post');

Route::get('/s', 'Front\SearchController@index');

Route::get('/tag/{item}', 'Front\TagController@index')->name('tag');

Route::post('/contact/{token}', 'Front\ContactController@incoming')->name('contact')->where('token', '[A-Za-z0-9]+');



/* ------------------------------ Back-end ------------------------------ */

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function() {

	Route::get('/dashboard', 'IndexController@dashboard')->name('dashboard');

	/* ------------------------------ user ------------------------------ */
	Route::get('/dashboard/user/profile', 'UserController@profile')->name('profile');
	Route::get('/dashboard/user/add', 'UserController@add');
	Route::get('/dashboard/user/edit/{id}', 'UserController@edit')->where('id', '[0-9]+');
	Route::get('/dashboard/user/remove/{id}', 'UserController@remove')->where('id', '[0-9]+');

	/* ------------------------------ mailbox ------------------------------ */
	Route::get('/dashboard/mailbox/inbox/{type?}/{cate?}', 'MessageController@inbox')->name('inbox');
	Route::get('/dashboard/mailbox/compose', 'MessageController@compose');
	Route::get('/dashboard/mailbox/view/{id}', 'MessageController@view')->where('id', '[0-9]+');
	Route::post('/dashboard/mailbox/send', 'MessageController@send');
	Route::get('/dashboard/mailbox/remove/{id}', 'MessageController@remove')->where('id', '[0-9]+');
	Route::get('/dashboard/mailbox/search', 'MessageController@search');
	
	/* ------------------------------ widgets ------------------------------ */
	Route::get('/dashboard/widgets', 'WidgetController@index');

	/* ------------------------------ file ------------------------------ */
	Route::get('/dashboard/file/manager', 'FileController@manager');
	Route::get('/dashboard/file/upload', 'FileController@upload')->name('upload');

	/* ------------------------------ article ------------------------------ */
	Route::get('/dashboard/article/index', 'ArticleController@index');
	Route::get('/dashboard/article/add', 'ArticleController@add');
	Route::get('/dashboard/article/edit/{id}', 'ArticleController@edit')->where('id', '[0-9]+');
	Route::get('/dashboard/article/preview/{id}', 'ArticleController@preview')->where('id', '[0-9]+');
	Route::get('/dashboard/article/pubilsh/{id}', 'ArticleController@pubilsh')->where('id', '[0-9]+');
	Route::get('/dashboard/article/remove/{id}', 'ArticleController@remove')->where('id', '[0-9]+');

	/* ------------------------------ gallery ------------------------------ */
	Route::get('/dashboard/gallery', 'GalleryController@index');

	/* ------------------------------ settings ------------------------------ */
	Route::get('/dashboard/settings', 'SettingController@index');

	/* ------------------------------ search ------------------------------ */
	Route::get('/dashboard/search', 'IndexController@search');

});