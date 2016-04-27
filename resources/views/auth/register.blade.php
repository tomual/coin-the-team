@extends('layout')

@section('content')
    <div class="container">
        @include('errors')

        <form action="{{ url('auth/register') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="text" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="username" class="control-label">In-Game Name</label>
                <input type="text" id="username" class="form-control">
            </div>

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
                    <i class="fa fa-plus"></i> Register
                </button>
            </div>
        </form>
    </div>
@stop