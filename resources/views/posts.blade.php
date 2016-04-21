@extends('layout')

@section('content')
    @foreach($posts as $post)
    	<h1>{{ $post->title }}</h1>
    	<div class="author">{{ $post->uid }}</div>
    	<div class="date">{{ $post->created_at }}</div>
    	<div class="body">{{ $post->body }}</div>
    @endforeach
@stop