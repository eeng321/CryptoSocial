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
        {{-- <script src='https://www.reddit.com/r/CryptoCurrency.embed'></script> --}}
    </div>
    @include('partials.home.newsfeed')
    
    <div class='row' style='padding-top: 15px;'>
        <div class='col'>
            <script src='https://redditjs.com/subreddit.js' data-subreddit='CryptoCurrency'  ></script>
        </div>
        <div class='col'>
            <script src='https://redditjs.com/subreddit.js' data-subreddit='CryptoCurrencyTrading'  ></script>
        </div>        
    </div>
@endsection()

@section('footer')
