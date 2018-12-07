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

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('entrances', 'EntrancesController');
Route::get('entrances/create', 'EntrancesController@create')->name('entrances.create');
Route::post('entrances', 'EntrancesController@store')->name('entrances.store');
Route::get('entrances/create_desc', 'EntrancesController@createDesc')->name('entrances.createDesc');
Route::post('entrances/storeDesc', 'EntrancesController@storeDesc')->name('entrances.storeDesc');
