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

Route::group(['middleware' => ['web']], function() {
	Route::get('/', function () {
//		return '<img src="/images/flower.jpg" alt="flowers" style="opacity:0.5">';
		return view('main');
	});
		
	Route::get('/image/{id}', 'GameController@getImage');
	
	Route::get('/test/{topic}', function ($topic) {
		return 'Testing: '.$topic;
	});
	
	Route::get('/test/{topic}', function ($topic) {
		return 'Testing: '.$topic;
	});
});
