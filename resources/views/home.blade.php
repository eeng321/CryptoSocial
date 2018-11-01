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

   <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="display-4 text-center">News Feed</h1>
                @if(count($news) > 0) 
                    @foreach(array_chunk($news['articles'], 3) as $articles)
                        <div class='row'>
                            @each('partials.home.newsfeed', $articles, 'article')
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection()

@section('footer')
