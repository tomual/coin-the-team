<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="header">
    <div class="logo">
    <div class="container">
        <div class="row nav">
            <ul>
                <li><a href="">Home</a></li>
                <li>Blog</li>
                <li>Team</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    </div>
    </div>

    <div class="container">
    <!-- Example row of columns -->
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
            <p>{{ $posts[0]->body }} <a href="{{ $posts[0]->redirect }}" target="_blank">More Information</a></p>
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

    <hr>

    <footer>
        <p>&copy; Damage Per Second Gaming 2016</p>
    </footer>
    </div> 
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </body>
</html>
