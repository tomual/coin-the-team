@extends('layout')

@section('content')
    <div class="container">
        @include('errors')

        <form action="{{ url('auth/login') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="task" class="control-label">Password</label>
                <input type="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default btn-block">
                    <i class="fa fa-plus"></i> Log In
                </button>
            </div>
        </form>
    </div>
@stop