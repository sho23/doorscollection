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
Auth::routes(['verify' => true]);

Route::get('/', function () {
	return view('welcome');
});
Route::get('logout', 'Auth\LoginController@logout');
Route::get('entrances/mypage', 'EntrancesController@mypage')->name('entrances.mypage')->middleware('verified');
Route::get('entrances/create_desc', 'EntrancesController@createDesc')->name('entrances.createDesc')->middleware('verified');
Route::post('entrances/storeDesc', 'EntrancesController@storeDesc')->name('entrances.storeDesc');
Route::resource('entrances', 'EntrancesController');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/policy', 'HomeController@policy')->name('home.policy');
Route::get('/qa', 'HomeController@qa')->name('home.qa');

Route::get('/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('/login/twitter/callback', 'Auth\SocialController@getTwitterAuthCallback');

Route::get('/login/facebook', 'Auth\SocialController@getFacebookAuth');
Route::get('/login/facebook/callback', 'Auth\SocialController@getFacebookAuthCallback');
