<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/','PageController@index');

Route::auth();

// Posts
Route::get('post','PostController@index');
Route::get('posts', 'PostController@posts');
Route::post('post', 'PostController@create');
Route::get('/post/{post}', 'PostController@view');
Route::delete('/post/{post}', 'PostController@delete');

// Members
Route::get('member','MemberController@index');
Route::get('nate','MemberController@nate');
Route::get('team', 'MemberController@members');
Route::post('member', 'MemberController@create');
Route::get('/member/{member}', 'MemberController@view');
Route::delete('/member/{member}', 'MemberController@delete');

// Teams
Route::get('team','MemberController@index');
Route::get('teams', 'MemberController@members');
Route::post('team', 'MemberController@create');
Route::get('/team/{team}', 'MemberController@view');
Route::delete('/team/{team}', 'MemberController@delete');