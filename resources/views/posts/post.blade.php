@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}">
    <div class="post-date">{{ $post->created_at->format('dS F Y') }}</div>
    <div class="post-author">{{ $post->uid }}</div>
    <p>{{ $post->body }}</p>
@stop