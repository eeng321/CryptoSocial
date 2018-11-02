@extends('layouts.app')

@section('title', 'Profile')

@section('navbar')
    @parent()
 
@endsection

@section('content')

        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <p>Username</p>
                </div>
        
                <ul class="list-unstyled components">
                    <li>
                        <a href="#">News Update</a>
                    </li>
                    <li>
                        <a href="#">Watchlist</a>
                    </li>
                    <li>
                        <a href="#">Trades</a>
                    </li>
                </ul>
        
            </nav>
            
            <div id="content">
                <div class="container-fluid">
                    @include('partials.profile.mywatchlist')
                </div>
            </div>
        </div>
       

@endsection

@section('footer')
