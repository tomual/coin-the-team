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
    <div class="header page">
        <div class="logo">
            <a href="/"><div class="home"></div></a>
            <div class="container">
                <div class="row nav">
                    <ul>
                        <li><a href="/posts">Posts</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/shirt">Shirt</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <h1>
                    @yield('title')
                </h1>
            </div>
        </div>
    </div>

    <div class="container">

        @yield('content')

    </div>
    <div class="container">
        <hr>
        <footer>
            <p>&copy; Damage Per Second Gaming 2016</p>
        </footer>
    </div>
</html>
