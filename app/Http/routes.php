<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/','PageController@index');

Route::get('post','PostController@index');

Route::get('posts', 'PostController@posts');

Route::post('post', 'PostController@create');

Route::get('/post/{post}', 'PostController@view');

Route::delete('/post/{post}', 'PostController@delete');

Route::auth();

