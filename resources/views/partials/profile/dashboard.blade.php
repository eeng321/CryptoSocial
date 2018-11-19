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
                            <h5>Trade Record</h5>
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
                                            color: "#4dc0b5"
                                        },
                                        {
                                            value: 10,
                                            color: "#343a40"
                                        },
                                        {
                                            value: 38,
                                            color: "#4fd98b"
                                        },
                                    ];
                                    var myDoughnut2 = new Chart(document.getElementById("donutPortfolio").getContext("2d")).Doughnut(doughnutData);
                                    </script>
                                    <footer>
                                        <h5>$171386</h5>
                                    </footer>
                            </div>
                    
                        </div>
                         <!-- right side of panel -->
                        <div class="panel-right">
                            <div id="portfolio-scroll">
                            <div class="col-md-12 col-md-offset-2">
                            <h5>BTC - ${{round($Coins->getCoinPrice("Bitcoin"),2)}} <span class="value-up"><i class="fa fa-caret-up hidden-sm hidden-xs"> </i></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 46%"></div>
                                </div>
                                <h5>LTC - ${{round($Coins->getCoinPrice("Litecoin"),2)}} <span class="value-up"><i class="fa fa-caret-up hidden-sm hidden-xs"> 7.11%</i></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%"></div>
                                </div>
                                <h5>ETH - ${{round($Coins->getCoinPrice("Ethereum"),2)}} <span class="value-down"><i class="fa fa-caret-down hidden-sm hidden-xs"> 1.79%</i></span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
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