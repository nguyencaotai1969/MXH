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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::post('home','HomeController@upload_home')->name('upload_home');
Route::get('/mesage','MessageController@mesage')->name('mesage')->middleware('verified');


//profile
Route::get('/profile','ProfileController@profile')->name('profile')->middleware('verified');
Route::post('/profile','ProfileController@update_avatar')->name('up_file_avatar');

