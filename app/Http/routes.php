<?php


Route::get('/', 'MainController@index');

Route::get('/ru', 'MainController@index');

Route::get('/ukr', 'MainController@index');

Route::get('/en', 'MainController@index');


Route::get('/user/{id}',['middleware' => 'auth','uses'=> 'MainController@getuser']);
//auth routes
Route::get('/auth/logout','AccountController@logout');

Route::get('/auth/signin','MainController@signinpage');

Route::get('/places',['middleware' => 'auth','uses'=>'MainController@places']);

//Route::get('/auth', ['middleware' => 'guest','uses'=>'MainController@render_auth']);

Route::get('github', 'AccountController@github_redirect');

Route::get('/socialite/socialite/callback', 'AccountController@github');

Route::get('facebook', 'AccountController@facebook_redirect');

Route::get('/socialite/facebook/callback', 'AccountController@facebook');

//--------------------

Route::post('/book',['middleware' => 'auth','uses'=>'MainController@bookplace']);
