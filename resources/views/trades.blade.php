@extends('layouts.app')

@section('title', 'Trades')

@section('navbar')

@section('content')
<main role="main" class="container">

    <div class="d-flex align-items-center p-3 my-3 text-black-50 rounded shadow-sm">
        <img class="mr-3" src="{{"img/homam.png"}}" alt="" width="60" height="60">
        <div class="lh-100">
            <h3>Trades</h3>
        </div>
    </div>

    @if (!Auth::guest())
    @include('partials.trades.createtrade')
    @endif
    @include('partials.trades.trades')
    @endsection()
@section('footer')
