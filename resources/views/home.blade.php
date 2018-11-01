@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
    @parent()
    @include('partials.home.carousel')
@endsection()

@section('content')
    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">{{ $userCount }} traders use Yeetly Join them today.</h2>
                <p class="card-text text-center">
                    We are a community of crypto-traders and investors looking not just to earn maximum profits, but to help each other learn and better capitalize on all the various stock market opportunities we see every day. Interact and learn with the best traders online who actually show ALL their trades, winners AND losers, to help you take your trading and education to the next level!
                </p>
            </div>
        </div>
    </div>

<<<<<<< HEAD
   <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="display-4 text-center">News Feed</h1>
                    @php
                    $i = 0;
                    $j_max = 3;
                    for($j = 0; $j < $j_max; $j++) {
                        echo "<div class='row'>";

                        for($k = 0; $k < 3; $k++) {
                            echo "<div class='col-md-4'>";
                            echo "<img class='card-img-thumb' src=".$news['articles'][$i]['urlToImage']." alt='Card image cap'>";
                            echo "<h2 class= 'card-title'>".$news['articles'][$i]['author']."</h2>";
                            echo "<p class= 'card-text news-card'>".$news['articles'][$i]['description']."</p>";
                            echo  "<a class='btn btn-secondary' target='_blank' href=".$news['articles'][$i]['url']." role='button'>View details &raquo;</a>";
                            echo "</div>";
                            $i++;
                        }

                        echo "</div>";
                        if($j !== $j_max-1) {
                            echo "<hr>";
                        }
                        
                    }
                    @endphp
            </div>
        </div>
    </div>
=======
    @include('partials.home.newsfeed')
>>>>>>> 6-create-search-page
@endsection()

@section('footer')
