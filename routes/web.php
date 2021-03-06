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
Route::get('/terms', 'HomeController@terms')->name('home.terms');
Route::get('/qa', 'HomeController@qa')->name('home.qa');
Route::get('/tutorial', 'HomeController@tutorial')->name('home.tutorial');
Route::resource('users', 'UserController');
Route::get('/leave', 'UserController@leave')->name('users.leave');
Route::post('/leavingStore', 'UserController@leavingStore')->name('users.leavingStore');
Route::put('updateStatus/{id}', 'UserController@updateStatus')->name('users.updateStatus');
Route::put('entrances/updateStatus/{id}', 'EntrancesController@updateStatus')->name('entrances.updateStatus');
Route::get('claim/{id}', 'EntrancesController@claim')->name('entrances.claim');
Route::get('/claimcomplete', 'EntrancesController@claimcomplete')->name('entrances.claimcomplete');
Route::post('/storeClaim{id}', 'EntrancesController@storeClaim')->name('entrances.storeClaim');
Route::put('updateVerify/{id}', 'UserController@updateVerify')->name('users.updateVerify');
Route::get('/claims', 'ClaimsController@index')->name('claims.index');
Route::post('/like','EntrancesController@postLikeEntrance')->name('like');
Route::post('/dislike','EntrancesController@postDisLikeEntrance')->name('dislike');

Route::get('/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('/login/twitter/callback', 'Auth\SocialController@getTwitterAuthCallback');

Route::get('/login/facebook', 'Auth\SocialController@getFacebookAuth');
Route::get('/login/facebook/callback', 'Auth\SocialController@getFacebookAuthCallback');
