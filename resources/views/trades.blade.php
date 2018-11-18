@extends('layouts.app')

@section('title', 'Trade')

@section('navbar')

@section('content')
<main role="main" class="container">

    <div class="d-flex align-items-center p-3 my-3 text-black-50 rounded shadow-sm">
        <img class="mr-3" src="{{"img/homam.png"}}" alt="" width="60" height="60">
        <div class="lh-100">
            <h3 >Trades (WIP)</h3>
        </div>
    </div>

    @if (!Auth::guest())
    @include('partials.trades.createpost')
    @endif
    @include('partials.trades.tradeposts')
    @endsection()
@section('footer')
