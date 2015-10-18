<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/statia/{name?}', function ($name=null) {
    return "statia".$name;
})->where('name','[A-z]+');

Route::get('/index', array('as'=>'position','uses'=>'BaseController@getIndex'));

Route::controller('/article','BaseController');

Route::get('/', function () {
    return view('welcome');
});
