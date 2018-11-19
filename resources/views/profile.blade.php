<!-- Inspired by Dashio template -->

@extends('layouts.app')
<!-- Include Charts -->
<script type="text/javascript" src="{{ URL::to('js/chart.js') }}"></script>
<!-- Replace contents -->
<script type="text/javascript">
    function load_main_content(content)
    {
        $('#replace').load('/users/'+{{Auth::user()->id}}+content);
    }
</script>

@section('title', 'Profile')

@section('navbar')

    <!-- Sidebar -->
    <aside>
        <div id="sidebar" class="nav-collapse" tabindex="5000" style="overflow:hidden; outline:none;">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="/profile"><img src="{{URL::to('img/pika.png')}}" class="img-circle" width="80"></a></p>
                <h5 class="centered">Boku no Pika</h5>
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
    <body onload="load_main_content('/dashboard');">
        <div id="replace">
            
        <!-- /replace content -->
        </div>
    </body>
@endsection

@section('footer')

