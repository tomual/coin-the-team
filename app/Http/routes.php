<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/','PageController@index');

Route::get('post','PostController@index');

Route::get('posts', 'PostController@posts');

Route::post('post', 'PostController@create');

Route::get('/post/{post}', 'PostController@view');

Route::delete('/post/{post}', function (Post $post) {
	$post->delete();
    return redirect('/posts');
});

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
