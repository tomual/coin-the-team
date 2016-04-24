@extends('layout')

@section('content')
    @foreach($posts as $post)
    	<h1>{{ $post->title }}</h1>
    	<div class="author">{{ $post->uid }}</div>
    	<div class="date">{{ $post->created_at }}</div>
    	<div class="body">{{ $post->body }}</div>
    	<form action="{{ url('post/' . $post->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
    @endforeach
@stop