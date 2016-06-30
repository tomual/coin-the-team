<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="header">
        <div class="logo">
            <div class="container">
                <div class="row nav">
                    <ul>
                        <li><a href="/posts">Posts</a></li>
                        <li><a href="/teams">Team</a></li>
                        <li><a href="/apparel">Apparel</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        @yield('content')

        <hr>
        <footer>
            <p>&copy; Damage Per Second Gaming 2016 
                @if( Auth::check() )
                    <a href="/logout">Log Out</a>
                @else
                    <a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                @endif
            </p></p>
        </footer>
    </div>


    </div> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </body>
</html>
