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

                <!--CUSTOM CHART START -->
                <div class="border-head">
                    <h3>DAILY GAINS</h3>
                  </div>
                  <div class="custom-bar-chart">
                    <ul class="y-axis">
                      <li><span>10,000</span></li>
                      <li><span>8,000</span></li>
                      <li><span>6,000</span></li>
                      <li><span>4,000</span></li>
                      <li><span>2,000</span></li>
                      <li><span>0</span></li>
                    </ul>
                    <div class="bar">
                      <div class="title">MON</div>
                      <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top" style="height: 85%;">8500</div>
                    </div>
                    <div class="bar ">
                      <div class="title">TUES</div>
                      <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top" style="height: 50%;">5000</div>
                    </div>
                    <div class="bar ">
                      <div class="title">WED</div>
                      <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top" style="height: 60%;">6000</div>
                    </div>
                    <div class="bar ">
                      <div class="title">THURS</div>
                      <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top" style="height: 45%;">4500</div>
                    </div>
                    <div class="bar">
                      <div class="title">FRI</div>
                      <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top" style="height: 32%;">3200</div>
                    </div>
                    <div class="bar ">
                      <div class="title">SAT</div>
                      <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top" style="height: 62%;">6200</div>
                    </div>
                    <div class="bar">
                      <div class="title">SUN</div>
                      <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top" style="height: 75%;">7500</div>
                    </div>
                  </div>
            </section>
        </div>
       

@endsection

@section('footer')

