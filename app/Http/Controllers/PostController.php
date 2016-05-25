<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;
use App\Http\Requests;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'posts',
            'view'
        ]]);
    }

    public function index()
    {
    	return view('posts.new');
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts', compact('posts'));
    }

    public function view(Post $post)
    {
        return view('posts.post', compact('post'));
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/post')
                ->withInput()
                ->withErrors($validator);
        }

        if( empty($request->redirect) ) {
            $request->redirect = 'https://www.facebook.com/DamagePerSecongGaming';
        }

        if( empty($request->image) ) {
            $request->image = '/img/default.png';
        }

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
            'redirect' => $request->redirect,
            'image' => $request->image,
        ]);

        return redirect('posts');
	}

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}