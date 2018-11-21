<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Title Section --}}
        <title>Yeetly - @yield('title')</title>

        {{-- Stylesheets --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{URL::to("css/app.css")}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        {{-- Navbar Section--}}
        @section('navbar')
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark">
            <a class="navbar-brand mb-0 h1" href="/">Yeetly</a>

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
                            <a class="dropdown-item" href="/posts">Posts</a>
                            <a class="dropdown-item" href="/users">Users</a>
                            <a class="dropdown-item" href="/trades">Trades</a>
                        </div>
                    </li>
                    {{-- Vu change this Login anchor to whatever you need--}}
                    {{-- Once loggeed in, you can click on it to go to profiles page --}}


                    @if (Auth::guest())
                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <!-- For you Edmond -->
                            <a class="dropdown-item" href="{{ '/users/'.Auth::user()->id }}">Profile</a>
                            <a class="dropdown-item" href="{{ url('/edit') }}">Edit</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </li>
                    @endif
                </div>
            </div>
        </nav>
        @show

        @section('content')
        @show

        @section('footer')
        <footer class="section footer-classic font-small bg-image">
            <div class="container-fluid text-center text-md-left">
                <div class="row" style="padding-top: 2.5vw; padding-bottom: 2.5vw;">
                    <div class="col text-center align-self-center" style="color: black;">
                        <h5 class="text-uppercase">Yeetly</h5>
                        <p>The official website for the crypto-currency community</p>
                        <br>
                        <p>Simon Fraser University</p>
                        <p>School of Computing Science</p>
                        <p>Vancouver, B.C.</p>
                        <br>
                        <p>© 2018 Yeetly. All rights reserved. </p>
                    </div>
                </div>
            </div>
        </footer>
        @show
    </body>
    @include('auth/login')
    @include('auth/register')

    <script src="{{URL::to("js/app.js")}}"></script>
    @if (session('showLogin'))
        <script>
            $('#loginModal').modal('show');
        </script>
    @endif
    @yield('scripts');
</html>
