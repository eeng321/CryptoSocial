@extends('layouts.app')

@section('title', 'Profile')

@section('navbar')
    @parent()
@endsection

@section('content')

        <div class="wrapper">
            <!-- Sidebar -->
            <aside>
                <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow:hidden; outline:none;">
                  <!-- sidebar menu start-->
                  <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="/profile"><img src="{{"img/pika.png"}}" class="img-circle" width="80"></a></p>
                    <h5 class="centered">Boku no Pika</h5>
                    <li>
                        <a class="dcjq-parent" href="javascript:;">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="dcjq-parent" href="javascript:;">
                            <i class="fa fa-rocket"></i>
                            <span>Trades</span>
                        </a>
                    </li>
                    <li>
                        <a class="dcjq-parent" href="javascript:;">
                            <i class="fa fa-sticky-note"></i>
                            <span>Watchlist</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a class="dcjq-parent" href="javascript:;">
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
                <div class="border-head">
                    <h3 class="text-center">MENTOR SUGGESTIONS</h3>
                </div>
                <div class="row mt content-panel">
                    <div class="col-md-4 profile-text mt mb centered">
                        <div class="right-divider hidden-sm hidden-xs">
                        <h4>1922</h4>
                        <h6>FOLLOWERS</h6>
                        <h4>290</h4>
                        <h6>FOLLOWING</h6>
                        <h4>$ 13,980</h4>
                        <h6>MONTHLY EARNINGS</h6>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 profile-text">
                        <h3>Squirtle</h3>
                        <h6>Squirtle Squad Leader</h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                        <br>
                        <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
                    </div>
                    <!-- /col-md-4 -->
                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                        <p><img src="{{"img/squirtle.png"}}" class="img-circle" width="150"></p>
                        <p>
                            <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                            <button class="btn btn-theme02">Add</button>
                        </p>
                        </div>
                    </div>
                    <!-- /col-md-4 -->
                </div>   
            </section>
        </div>
       

@endsection

@section('footer')

