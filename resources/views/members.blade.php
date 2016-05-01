@extends('layout.page')

@section('title')
    Team
@stop

@section('content')
<div class="row members">
	<div class="col-md-8 col-md-offset-2">
		@if( Auth::check() )
		<a href="/member" class="btn btn-primary"><i class="fa fa-file-o" aria-hidden="true"></i>New Member</a>
		@endif
	    @foreach($members as $member)
	    	<div class="member">
		    	<div class="image"><img src="{{ $member->image }}"></div>
		    	<h2>{{ $member->username }}</h2>
		    	<div class="position">{{ $member->position }}</div>
		    	<div class="joined">Joined {{ $member->joined }}</div>
		    	<form action="{{ url('member/' . $member->id) }}" method="POST">
		            {!! csrf_field() !!}
		            {!! method_field('DELETE') !!}

            		@if( Auth::check() )
					<!-- <a href="/member/edit/{{ $member->id }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a> -->
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
					@endif
		            
		        </form>
	        </div>
	    @endforeach
    </div>
</div>
@stop