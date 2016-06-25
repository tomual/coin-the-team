@extends('layout.page')

@section('title')
    Edit Member
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2 new-form">
        @include('errors')

        <form action="{{ url('member/update') }}/{{ $member->id }}" method="POST" class="form-horizontal" id="new-member">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="task" class="control-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ $member->username }}">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Team</label>
                <select class="form-control" name="group_id" id="group_id">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" @if($team->id == $member->group_id) selected @endif>{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Position</label>
                <input type="text" name="position" id="position" class="form-control" value="{{ $member->position }}">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Joined (m/d/y)</label>
                <input type="text" name="joined" id="joined" class="form-control" value="{{ date('m/d/Y') }}" value="{{ $member->joined }}">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Image URL</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                    <input type="text" name="image" id="image" class="form-control" value="{{ $member->image }}">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/teams" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop