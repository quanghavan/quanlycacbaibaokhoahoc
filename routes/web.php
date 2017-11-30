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


Route::middleware('checkauth')->group(function() {
    Route::get('logout','AdminController@logout');
    Route::get('changeUserPass/{idUser}','AdminController@getChangeUserPass');
    Route::post('changeUserPass/{idUser}','AdminController@postChangeUserPass');
    Route::get('deletePaper/{idPaper}','AdminController@deletePaper');
    Route::get('deletePaper/{idPaper}','AdminController@deletePaper');
    Route::get('addData','AdminController@getAddData')->name('add_data');
    Route::post('addData', ['before' => 'csrf', 'uses' => 'AdminController@postAddData']);
});
Route::get('admin','UserController@getLogin')->name('admin');
Route::post('login', 'UserController@postLogin');
Route::get('list','UserController@getList');
Route::get('/search','UserController@search');
Route::get('/','UserController@search');