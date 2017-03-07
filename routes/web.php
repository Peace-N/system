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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/builders/page', ['as' => 'builders.page', 'uses' => 'Builders\\PageBuilderController@index']);
});

Route::match(['get', 'post'], '/eon/lti/test', 'TestLTIController@index');