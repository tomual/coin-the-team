<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;

class PageController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('home', compact('posts'));
    }

    public function apparel()
    {
    	return view('apparel');
    }

    public function contact()
    {
    	return view('contact');
    }

    public function submitContact(Request $request)
    {
    	dd($request->all());
    }
}
