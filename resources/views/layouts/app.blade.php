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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="nav navbar-right navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                </div>
            </div>
        </nav>    
        @show
    </body>
</html>
