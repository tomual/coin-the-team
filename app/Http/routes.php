<?php

use App\Post;
use Illuminate\Http\Request;

Route::get('/','PageController@index');

Route::get('post','PostController@index');

Route::get('posts', 'PostController@posts' );

Route::post('post',  function (Request $request) {
	$validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'body' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->redirect = $request->redirect;
    $post->image = $request->image;
    $post->save();

    return redirect('post');
});

Route::delete('/post/{post}', function (Post $post) {

});


