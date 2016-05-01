@extends('layout.page')

@section('title')
    Posts
@stop

@section('content')
<div class="row posts">
	<div class="col-md-8 col-md-offset-2">
		@if( Auth::check() )
		<a href="/post" class="btn btn-primary"><i class="fa fa-file-o" aria-hidden="true"></i>New Post</a>
		@endif
	    @foreach($posts as $post)
	    	<div class="post">
		    	<div class="image"><img src="{{ $post->image }}"></div>
		    	<h2>{{ $post->title }}</h2>
		    	<div class="author">By {{ $post->uid }}</div> @ 
		    	<div class="date">{{ $post->created_at->format('jS M Y h:ma')  }}</div> - 
		    	<div class="link"><a href="{{ $post->redirect }}">Link</a></div>
		    	<div class="body">{{ $post->body }}</div>		    	
		    	<form action="{{ url('post/' . $post->id) }}" method="POST">
		            {!! csrf_field() !!}
		            {!! method_field('DELETE') !!}

            		@if( Auth::check() )
					<!-- <a href="/post/edit/{{ $post->id }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
					@endif
		            
		        </form>
	        </div>
	    @endforeach
    </div>
</div>
@stop