@extends('layout')

@section('content')
    <div class="container">
        @include('errors')

        <form action="{{ url('post') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="task" class="control-label">Post</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Post Content</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Redirect URL</label>
                <input type="text" name="url" id="url" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Image URL</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default btn-block">
                    <i class="fa fa-plus"></i> Post
                </button>
            </div>
        </form>
    </div>
@stop