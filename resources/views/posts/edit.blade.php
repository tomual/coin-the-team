@extends('layout.page')

@section('title')
    Edit Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @include('errors')

        <form action="{{ url('post/update') }}/{{ $post->id }}" method="POST" class="form-horizontal" id="new-post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="task" class="control-label">Post</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Post Content</label>
                <textarea name="body" id="body" class="form-control" rows="7">{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Image URL</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                    <input type="text" name="image" id="image" class="form-control" value="{{ $post->image }}">
                </div>
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Redirect URL</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-link" aria-hidden="true"></i></div>
                    <input type="text" name="redirect" id="redirect" class="form-control" value="{{ $post->redirect }}">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="/posts" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop