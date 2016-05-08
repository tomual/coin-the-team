@extends('layout.page')

@section('title')
    New Member
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2 new-form">
        @include('errors')

        <form action="{{ url('member') }}" method="POST" class="form-horizontal" id="new-member">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="task" class="control-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Team</label>
                <select class="form-control" name="group_id" id="group_id">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Position</label>
                <input type="text" name="position" id="position" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Joined (m/d/y)</label>
                <input type="text" name="joined" id="joined" class="form-control" value="{{ date('m/d/Y') }}">
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
                <a href="/teams" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop