<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Setup CORS
 */
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post("generate/surah/names", 'MainAPIController@generateSurahNames');
Route::post("generate/surah/juz", 'MainAPIController@generateJuz');
Route::post("generate/surah/numberayah", 'MainAPIController@generateNumberAyah');
Route::post("generate/updatequestion", 'MainAPIController@generateUpdateQuestion');
Route::post("generate/question/one", 'MainAPIController@generateOneQuestion');

Route::get("question-answers/get/{id}", 'MainAPIController@getQuestionAnswersByIdQuestion');
Route::get("question-answers/juz/get/{juz}/{num_questions}", 'MainAPIController@getQuestionAnswersByJuz');
