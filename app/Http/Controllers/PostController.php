<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	$posts = Post::all();
    	return view('posts', compact('posts'));
    }
}
