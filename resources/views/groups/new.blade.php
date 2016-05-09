@extends('layout.page')

@section('title')
    New Team
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2 new-form">
        @include('errors')

        <form action="{{ url('team') }}" method="POST" class="form-horizontal" id="new-team">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="/teams" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop