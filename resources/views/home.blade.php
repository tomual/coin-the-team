@extends('layout.home')

@section('content')
    <div class="row intro">
        <div class="col-md-4">
            <div class="intro-fa"><i class="fa fa-users"></i></div>
            <h2>Who are we?</h2>
            <p>Damage Per Second Gaming is your opportunity to take the steps needed to enter the competitive world of Gaming. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus dapibus lacus ac porttitor. </p>
        </div>
        <div class="col-md-4">
            <div class="intro-fa"><i class="fa fa-trophy"></i></div>
            <h2>What do we do?</h2>
            <p>DSPG is a group of experienced gamers who have played in competitve games like WoW, LoL and Smite. We are looking to help the e-sport community grow and take talented players to the highest possible tier of game play.</p>
        </div>
        <div class="col-md-4">
            <div class="intro-fa"><i class="fa fa-gamepad"></i></div>
            <h2>Are you a player?</h2>
            <p>Contact us today! We are currently recruiting for all teams. Please be aware that proof of eligibility will be required as designated by a DPSG staff member.</p>
        </div>
    </div>


    <div class="row highlight">
        <div class="col-md-12">
            <h2>Blog</h2>
        </div>
        <div class="col-md-6">
            <img src="{{ $posts[0]->image }}">
            <!-- <img src="img/stephaniekawaii.png"> -->
        </div>
        <div class="col-md-6">
        @if($posts->count())
            <h1>{{ $posts[0]->title }}</h1>
            <div class="post-date">{{ $posts[0]->created_at->format('dS F Y') }}</div>
            <p>{{ $posts[0]->body }}</p>
            <a class="btn btn-primary" href="{{ $posts[0]->redirect }}" target="_blank">More Information</a>
        @endif
        </div>
    </div>

    <div class="row blog">
        <div class="col-md-12">
            <h2>More Posts</h2>
        </div>
        @for ($i = 1; $i <= 3; $i++)
        <div class="col-md-4 post-preview">
            @if($posts->count() > $i)
            <!-- <img src="http://dhost1.mmomiss.com/uploads/201509/4eec6099c0beb9063c13be929ea4114a.jpg"> -->
            <img src="{{ $posts[$i]->image }}">
            <h2>{{ $posts[$i]->title }}</h2>
            <div class="post-date">{{ $posts[$i]->created_at->format('dS F Y') }}</div>
            <p>{{ $posts[$i]->body }} <a href="{{ $posts[$i]->redirect }}" target="_blank">More Information</a></p>
            @endif
        </div>
        @endfor
    </div>

@stop