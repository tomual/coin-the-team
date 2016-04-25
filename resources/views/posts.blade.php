@extends('layout')

@section('content')
<div class="row posts">
	<div class="col-md-8 col-md-offset-2">
		<a href="/post" class="btn btn-primary">New Post</a>
	    @foreach($posts as $post)
	    	<div class="post">
		    	<h1>{{ $post->title }}</h1>
		    	<div class="image"><img src="{{ $post->image }}"></div>
		    	<div class="author">By {{ $post->uid }}</div> @ 
		    	<div class="date">{{ $post->created_at->format('dS M Y h:ma')  }}</div> - 
		    	<div class="link"><a href="{{ $post->redirect }}">Link</a></div>
		    	<div class="body">{{ $post->body }}</div>		    	
		    	<form action="{{ url('post/' . $post->id) }}" method="POST">
		            {!! csrf_field() !!}
		            {!! method_field('DELETE') !!}

		            <button type="submit" class="btn btn-danger">
		                <i class="fa fa-trash"></i> Delete
		            </button>
		        </form>
	        </div>
	    @endforeach
    </div>
</div>
@stop