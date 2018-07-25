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

Route::get('/guest/play/','MainController@guestMode');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/play/easy','MainController@modeEasy');
    Route::get('/play/medium','MainController@modeMedium');
    Route::get('/play/hard','MainController@modeHard');
    Route::get('/scoreboard/easy','LeaderboardController@topList');
    Route::get('/scoreboard/medium','LeaderboardController@topListMedium');
    Route::get('/scoreboard/hard','LeaderboardController@topListHard');

});

Route::get('listuser','Maincontroller@listuser');


Auth::routes();

Route::get('loginpage', function(){
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');



Route::post('result','LeaderboardController@result');


