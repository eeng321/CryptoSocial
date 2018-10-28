@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
    @parent()

    <div id="carouselSlides" class="carousel slide" data-ride="caraousel">
        <div class="carousel-inner">
            <div class="carousel-item active">                
                <img src="{{"img/placeholder.png"}}" width="100%" height"auto"/>
                <div class="carousel-caption">
                    <h1>Yeetly</h1>
                    <p>The world's best crypto-currency community</p>
                </div>
            </div>
        </div>
    </div>

    <div class=""></div>

    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                {{-- Change numbers to dynamic using UserController--}}
                {{-- These are temp text values, remember to replace them --}}
                <h5 class="card-title">0 traders use Yeetly. Join them today.</h5>
                <p class="card-text">
                    We are a community of nearly 0 traders and investors looking not just to earn maximum profits, but to help each other learn and better capitalize on all the various stock market opportunities we see every day. Interact and learn with the best traders online who actually show ALL their trades, winners AND losers, to help you take your trading and education to the next level!
                </p>

            </div>
        </div>    
    </div>

@endsection()