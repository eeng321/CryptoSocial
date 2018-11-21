<?php use App\Http\Controllers\UsersController; ?> 
<?php use App\Http\Controllers\FollowerController; ?>

<div class="wrapper">
    <!-- Main Content -->
    <section id="content">
      <!-- Show panel only if logged in and not the owner of profile -->
    @if(!Auth::guest() && Auth::user()->id != basename(Request::segment(2)) ) 
        <!-- USER PANEL -->
        <div class="row mt content-panel">
            <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                <h4>{{FollowerController::countFollowers($userProfile->id)}}</h4>
                <h6>FOLLOWERS</h6>
                <h4>{{FollowerController::countFollowers($userProfile->id)}}</h4>
                <h6>FOLLOWING</h6>
                <h4>$ 13,980</h4>
                <h6>MONTHLY EARNINGS</h6>
                </div>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 profile-text">
                <h3>{{$userProfile->name}}</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                <br>
                <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 centered">
                <div class="profile-pic">
                <!-- grab profile owner's info -->
                @php
                    $avatar = '/storage/avatars/' . UsersController::getAvatar($userProfile->id);
                @endphp   
                <p><img src="{{$avatar}}" class="img-circle" width="150"></p>
                <p>
                    {{-- <button id="followBtn" type="button" data-url={{$isFollowing ? 'unfollow' : 'follow'}}><i class="fa fa-check"></i>{{ $isFollowing ? 'Unfollow' : 'Follow'}} </button> --}}

                    <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                    {{-- <button class="btn btn-theme02">Add</button> --}}
                </p>
                </div>
            </div>
        <!-- /col-md-4 -->
        </div>
    @endif
        <!--CUSTOM CHART START -->
        <div class="border-head">
            <h3>MONTHLY GAINS</h3>
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
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top" style="height: 85%;">8500</div>
            </div>
            <div class="bar ">
                <div class="title">JUNE</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top" style="height: 50%;">5000</div>
            </div>
            <div class="bar ">
                <div class="title">JULY</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top" style="height: 60%;">6000</div>
            </div>
            <div class="bar ">
                <div class="title">AUG</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top" style="height: 45%;">4500</div>
            </div>
            <div class="bar">
                <div class="title">SEPT</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top" style="height: 32%;">3200</div>
            </div>
            <div class="bar ">
                <div class="title">OCT</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top" style="height: 62%;">6200</div>
            </div>
            <div class="bar">
                <div class="title">NOV</div>
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
                        <h4>Trade Record</h4>
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
                        <h4>PORTFOLIO</h4>
                        <!--  Show the add to portfolio button only if profile belongs to user -->
                        @if(!Auth::guest() && Auth::user()->id == basename(Request::segment(2)) ) 
                            <button class="btn btn-theme04 pull-right position mt-2" data-toggle="modal" data-target="#addCoin"> <i class="fa fa-star"></i> </button>
                        @endif
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
                            <!-- portfolio -->
                            <ul id="portfolio">
                                <li class="form-inline" >
                                    <div class="legend" style="background: #4dc0b5;"></div>
                                    <h5>BTC - ${{round($Coins->getCoinDetail("Bitcoin")->getPrice(),2)}} 
                                        <script>
                                            displayChange24({{round($Coins->getCoinDetail("Bitcoin")->getChangeIn24(),2)}}, "coin1" );    
                                        </script>
                                        <div id="coin1-up" style="display:none;">
                                        <span class="value-up">
                                            <i class="fa fa-caret-up hidden-sm hidden-xs">  {{round($Coins->getCoinDetail("Bitcoin")->getChangeIn24(),2)}} %</i>
                                        </span>
                                        </div>
                                        <div id="coin1-down" style="display:none;">
                                        <span class="value-down">
                                            
                                            <i class="fa fa-caret-down hidden-sm hidden-xs">  {{round($Coins->getCoinDetail("Bitcoin")->getChangeIn24(),2)}} %</i>
                                        </span>
                                        </div>
                                    </h5>
                                </li>
                            </ul>
                            
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

<!-- Modal -->
<div class="modal fade" id="addCoin" tabindex="-1" role="dialog" aria-labelledby="addCoinLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addCoinLabel">Add to Portfolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{-- <form method="POST" action="{{Form::open(array('action' => 'WalletController@store'))}}">
                @csrf    
                    <input type='hidden' name='user_id' value="{{Auth::user()->id}}">
                
                    <div class="form-group">
                        <label for="coin">Coin: <span class="require">*</span></label>
                        <input type="text" class="form-control" name="coin" />
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount: <span class="require">*</span></label>
                        <input type="text" class="form-control" name="amount" />
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-theme">Add</button>
                    </div>
        
                </form> --}}
            </div>
            
          </div>
        </div>
      </div>
