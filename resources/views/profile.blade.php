@extends('layouts.app')

@section('title', 'Profile')

@section('navbar')
    @parent()
@endsection

@section('content')

        <div class="wrapper">
            <!-- Sidebar -->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                  <!-- sidebar menu start-->
                  <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="/profile"><img src="{{"img/pika.png"}}" class="img-circle" width="80"></a></p>
                    <h5 class="centered">Boku no Pika</h5>
                    <li>
                        <a href="/profile">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <i class="fa fa-rocket"></i>
                            <span>Trades</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <i class="fa fa-sticky-note"></i>
                            <span>Watchlist</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-comments-o"></i>
                            <span>Chat Room</span>
                        </a>
                      <ul class="sub">
                            <li><a href="lobby.html">Lobby</a></li>
                            <li><a href="chat_room.html"> Chat Room</a></li>
                      </ul>
                    </li>
                
                  </ul>
                  <!-- sidebar menu end-->
                </div>
              </aside>

            <!-- Main Content -->
            <section id="content">
                <div class="row">
                    <div class="col-md-16">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Watchlist</h5>
                                @include('partials.profile.mywatchlist')
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
        </div>
       

@endsection

@section('footer')

