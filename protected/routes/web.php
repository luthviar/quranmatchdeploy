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

Route::get('/', 'MainController@index');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/guest/play/easy','MainController@guestModeEasy');
    Route::get('/guest/play/medium','MainController@guestModeMedium');
    Route::get('/guest/play/hard','MainController@guestModeHard');
    Route::get('/scoreboards','LeaderboardController@topList');

});


Auth::routes();

Route::get('loginpage', function(){
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');



Route::post('result','LeaderboardController@result');


