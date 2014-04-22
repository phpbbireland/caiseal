<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/***
Route::filter('before', function()
{
    Asset::add('jquery', 'js/jquery-2.1.0.min.js');
    Asset::add('style', 'css/style.css');
});
***/


Route::get('/', 'PagesController@home');

Route::get('login', function()
{
	return View::make('login');
})->before('auth');

Route::get('admin', function()
{
	return 'Admin Page.....';
})->before('auth');

Route::resource('users', 'UserController');
Route::resource('sessions', 'SessionsController');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('home', 'PagesController@pages');

Route::get('/search', 'PagesController@search');

Route::get('/pages/about', 'PagesController@about');
Route::get('/pages/contribute', 'PagesController@contribute');
Route::get('/pages/download', 'PagesController@download');
Route::get('/pages/contact', 'PagesController@contact');
Route::get('/pages/ucp', 'PagesController@ucp');


//Route::resource('portal', 'UserController');
Route::get('/forum/portal', 'PagesController@portal');

/*
Route::get('make', function()
{
	User::create([
		'username' => 'Sean',
		'email' => 'sean@eircom.net',
		'password' => Hash::make('change2day')
	]);
});
*/
