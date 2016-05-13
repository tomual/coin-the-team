@extends('layout.page')

@section('title')
    Contact
@stop

@section('content')
    <div class="col-md-6 col-md-offset-3 new-form">
        <p>Feel free to ask any questions or request membership using the contact form below. We will email you back within 24 hours.</p>
        @include('errors')

        <form action="{{ url('contact') }}" method="POST" id="contact">
            {!! csrf_field() !!}
            <div class="form-group row">
                <label for="name" class="col-sm-2 form-control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 form-control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="ign" class="col-sm-2 form-control-label">IGN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ign" name="ign">
                </div>
            </div>
            <div class="form-group row">
                <label for="game" class="col-sm-2 form-control-label">Game</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="game" name="game">
                </div>
            </div>
            <div class="form-group row">
                <label for="message" class="col-sm-2 form-control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
@stop