<!-- Inspired by Dashio template -->
<?php use App\Http\Controllers\UsersController; ?>
@extends('layouts.app')

@section('scripts')
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include Charts -->
<script type="text/javascript" src="{{ URL::to('js/chart.js') }}"></script>
<!-- Replace contents -->

<script type="text/javascript">
    //change page content
    function load_main_content(content)
    {
 
        var guest = {{ collect(request()->segments())->last() }}
        $('#replace').load(guest + content);

    }

    //display change of coin in red or green
    function displayChange24(change, divID){
        if(change > 0 ){
            document.getElementById(divID+"-up").style.display="inline";
        }
        else{
            document.getElementById(divID+"-down").style.display="inline";
        }
    }
    //use for watchlist page
    //helper making api call to get coin
    function getCoinInfo(name) {
        var coin = {
            price : "",
            changeIn24 : ""
        };

        const Http = new XMLHttpRequest();
        const url='https://api.coinmarketcap.com/v2/listings/';
        Http.open("GET", url);
        Http.send();
        var jsonString = "";
        Http.onreadystatechange= function(){
            if(this.readyState==4 && this.status==200) {
                var jsonString = JSON.parse(Http.response);
                //console.log(jsonString);
                //document.write(jsonString.data[0].name);


                console.log(jsonString.data.length);


                var coinID = "";
                for(var i = 0; i < jsonString.data.length; i++) {
                    if(jsonString.data[i].name === name) {
                        coinID = jsonString.data[i].id;
                        break;
                    }
                }


                var coinUrl = "https://api.coinmarketcap.com/v2/ticker/" + coinID +"/";
                console.log(coinUrl);
                Http.open("GET", coinUrl);
                Http.send();
                Http.onreadystatechange= function(){
                    if(this.readyState==4 && this.status==200) {
                        var json = JSON.parse(Http.response);
                        console.log(json);


                        coin.price = json.data.quotes.USD.price;
                        coin.changeIn24 = json.data.quotes.USD.percent_change_24h;
                        console.log(coin.price);
                        console.log(coin.changeIn24);
                        return coin;
                    }
                }
            }
        }
    }
    function addWatchlistItem(){
        // <?php $results = $Coins->populateCoins() ?>
        // Find a <table> element with id="myTable":
        var table = document.getElementById("watchlistTable");

        // Create an empty <tr> element and add it to the 1st position of the table:
        var row = table.insertRow(-1);
        var coin = document.getElementById('watchlistSearch').value;

        // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
        var cellName = row.insertCell(-1);
        var cellPrice = row.insertCell(-1);
        var cellChange = row.insertCell(-1);

        var name = document.getElementById('watchlistSearch').value;
        
            
        if(name != ""){
            // Add some text to the new cells:
            // var price = {!! $Coins->getCoinDetail("Bitcoin")->getPrice(); !!};
            var coinInfo = getCoinInfo(name);

            cellName.innerHTML = name;
            cellPrice.innerHTML = String(coinInfo.price); //price
            cellChange.innerHTML = String(coinInfo.changeIn24); //change
        }
        else{
            console.log(name);
            alert("Unidentified Coin");
        }

    }

    // follow buttons
</script>

@section('title', 'Profile')

@section('navbar')

    <!-- Sidebar -->
    <aside>
        <div id="sidebar" class="nav-collapse" tabindex="5000" style="overflow:hidden; outline:none;">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <!-- grab profile owner's info -->
                @if(!Auth::guest())
                    @php
                        $avatarSide = '/storage/avatars/' . UsersController::getAvatar(Auth::user()->id);
                        $dpName = Auth::user()->name;
                        $profile = '/users/' .Auth::user()->id
                    @endphp
                @else
                    @php
                        $avatarSide = "/img/homam.png" ;
                        $dpName = "GUEST";
                        $profile = '/'
                    @endphp 
                @endif

                <p class="centered"><a href={{$profile}}><img src="{{ $avatarSide }}" class="img-circle" width="80"></a></p>
                    <h5 class="centered">{{$dpName}}</h5>
                <li>
                    <a class="dcjq-parent" href="javascript:;" onclick="load_main_content('/dashboard')">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="dcjq-parent" href="javascript:;" onclick="load_main_content('/trades')">
                        <i class="fa fa-rocket"></i>
                        <span>Trades</span>
                    </a>
                </li>
                <li>
                    <a class="dcjq-parent" href="javascript:;" onclick="load_main_content('/watchlist')">
                        <i class="fa fa-sticky-note"></i>
                        <span>Watchlist</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="dcjq-parent" href="javascript:;" onclick="load_main_content('/chat')">
                        <i class="fa fa-comments-o"></i>
                        <span>Chat Room</span>
                    </a>
                </li>
            </ul>
        </div>
    <!-- sidebar menu end-->
    </aside>
    @parent()
@endsection

@section('content')


    <body onload="load_main_content('/dashboard');"> 
        <div id="replace">
        
        <!-- /replace content -->
        </div>
    </body>

@endsection

@section('footer')

