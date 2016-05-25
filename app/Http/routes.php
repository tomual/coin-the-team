<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/','PageController@index');

Route::auth();

// Posts
Route::get('post','PostController@index');
Route::get('posts', 'PostController@posts');
Route::post('post', 'PostController@create');
Route::get('/post/edit/{post}', 'PostController@edit');
Route::post('/post/update/{post}', 'PostController@update');
Route::get('/post/{post}', 'PostController@view');
Route::delete('/post/{post}', 'PostController@delete');

// Members
Route::get('member','MemberController@index');
Route::get('nate','MemberController@nate');
Route::get('teams', 'MemberController@members');
Route::post('member', 'MemberController@create');
Route::get('/member/{member}', 'MemberController@view');
Route::delete('/member/{member}', 'MemberController@delete');

// Teams
Route::get('team','GroupController@index');
Route::post('team', 'GroupController@create');
Route::delete('/team/{group}', 'GroupController@delete');

//Apparel
Route::get('apparel','PageController@apparel');
Route::get('contact','PageController@contact');
Route::post('contact','PageController@submitContact');

