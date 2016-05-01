@extends('layout.page')

@section('title')
    New Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @include('errors')

        <form action="{{ url('member') }}" method="POST" class="form-horizontal" id="new-member">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="task" class="control-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Team</label>
                <input type="text" name="group_id" id="group_id" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Position</label>
                <input type="text" name="position" id="position" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Joined</label>
                <input type="text" name="joined" id="joined" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Image URL</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="/team" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop