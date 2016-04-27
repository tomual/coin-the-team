<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;
use App\Http\Requests;

class PostController extends Controller
{
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

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
            'redirect' => $request->redirect,
            'image' => $request->image,
        ]);

        return redirect('posts');
	}
}
