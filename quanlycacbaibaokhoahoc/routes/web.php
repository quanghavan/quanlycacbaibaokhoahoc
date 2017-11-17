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
Route::group(['prefix' => 'admin','middleware'=>'adminlogin'],function() {
    Route::get('logout','AdminController@logout');
    Route::get('changeUserPass/{idUser}','AdminController@getChangeUserPass');
    Route::post('changeUserPass/{idUser}','AdminController@postChangeUserPass');
    Route::get('deletePaper/{idPaper}','AdminController@deletePaper');
    Route::get('deletePaper/{idPaper}','AdminController@deletePaper');
    Route::get('addPaper','AdminController@getAddPaper');
    Route::post('addPaper','AdminController@postAddPager');

});
Route::get('login','UserController@getLogin');
Route::post('login','UserController@postLogin');
Route::get('list','UserController@getList');
Route::get('search','UserController@search');
