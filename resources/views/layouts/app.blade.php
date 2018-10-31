<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title Section --}}
        <title>Yeetly - @yield('title')</title>
        
        {{-- Stylesheets --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{"css/app.css"}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        {{-- Navbar Section--}}
        @section('navbar')
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Yeetly</span>    
            
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="nav navbar-nav text-center">
                    <a class="nav-item nav-link" href="/">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="commDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Community
                        </a>
                        <div class="dropdown-menu" aria-labelledby="commDropdown">
                            <a class="dropdown-item" href="watchlist">Watchlist</a>
                            <a class="dropdown-item" href="trades">Trades</a>
                            <a class="dropdown-item" href="userspage">Users</a>
                        </div>
                    </li>
                    {{-- Vu change this Login anchor to whatever you need--}}
                    {{-- Once loggeed in, you can click on it to go to profiles page --}}
                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                </div>
            </div>
        </nav>    
        @show

        @section('content')
        @show
    </body>

    <script src="{{"js/app.js"}}"></script>
</html>