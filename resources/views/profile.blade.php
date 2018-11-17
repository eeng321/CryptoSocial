@extends('layouts.app')
<!-- Include Charts -->
<script type="text/javascript" src="{{ URL::asset('js/chart.js') }}"></script>

@section('title', 'Profile')

@section('navbar')

    <!-- Sidebar -->
    <aside>
        <div id="sidebar" class="nav-collapse" tabindex="5000" style="overflow:hidden; outline:none;">
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
        </div>
    <!-- sidebar menu end-->
    </aside>
    @parent()
@endsection

@section('content')

        <div class="wrapper">

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
                <!--custom chart end-->

                <!-- chart panels -->
                <div class="row mt">
                    <!-- darkblue win percentage panel-->
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="darkblue-panel pn">
                            <div class="darkblue-header">
                                <h5>WIN PERCENTAGE</h5>
                            </div>
                            <canvas id="donutWin" height="120" width="120"></canvas>
                            <script>
                                var doughnutData = [{
                                    //wins
                                    value: 128,
                                    color: "#1c9ca7"
                                },
                                {
                                    //losses
                                    value: 72,
                                    color: "#f68275"
                                }
                                ];
                                var myDoughnut = new Chart(document.getElementById("donutWin").getContext("2d")).Doughnut(doughnutData);
                            </script>
                            <!-- date of last trade OR add 2 line breaks-->
                            <p>August 18, 2018</p>
                            <footer>
                                <div class="pull-left">
                                <h5><i class="fa fa-sort"></i> 128 WINS</h5>
                                </div>
                                <div class="pull-right">
                                <h5>64% WIN RATE</h5>
                                </div>
                            </footer>
                        </div>
                    <!--  /darkblue panel -->
                    </div>
                    <!--  portfolio grey panel -->
                    <div class="col-md-4 col-sm-4 mb">
                        <div class="grey-panel pn donut-chart">
                            <div class="grey-header">
                                <h5>PORTFOLIO</h5>
                            </div>
                            <!-- left side of panel -->
                            <div class="panel-left">
                                <div class="d-inline-block"> 
                                    <canvas id="donutPortfolio" height="120" width="120"></canvas>
                                        <script>
                                        var doughnutData = [{
                                                value: 42,
                                                color: "#f66D9b"
                                            },
                                            {
                                                value: 10,
                                                color: "#fdfdfd"
                                            },
                                            {
                                                value: 38,
                                                color: "#4fd98b"
                                            },
                                            {
                                                value: 8,
                                                color: "#9561e2"
                                            },
                                        ];
                                        var myDoughnut2 = new Chart(document.getElementById("donutPortfolio").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <footer>
                                            <h5>Distribution</h5>
                                        </footer>
                                </div>
                             
                            </div>
                             <!-- right side of panel -->
                            <div class="panel-right">
                                <div class= "scrollbar scrollbar-morpheus-den">
                                <div class="col-md-8 col-md-offset-2">
                                    <h5>Bitcoin (42%)</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%"></div>
                                    </div>
                                    <h5>Litecoin (38%)</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%"></div>
                                    </div>
                                    <h5>Dogecoin (10%)</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                    </div>
                                    <h5>Ripple (8%)</h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%"></div>
                                    </div>
                                </div>
                                </div>
                                <!-- /col-md-8 -->
                            </div>
                        </div>
                        <!-- /grey-panel -->
                    </div>
                    
                </div>
            </section>
        </div>
       

@endsection

@section('footer')

