@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')

@section('content')
<main role="main" class="container">
@if($post)
    @include('partials.posts.showpost')
@else
    <div class="d-flex align-items-center p-3 my-3 text-black-50 rounded shadow-sm">
        <img class="mr-3" src="{{"img/homam.png"}}" alt="" width="60" height="60">
        <div class="lh-100">
            <h3>Community Posts</h3>
        </div>
    </div>

    @if (!Auth::guest())
    @include('partials.posts.createpost')
    @endif
    @include('partials.posts.tradeposts')
@endif
    @endsection()
@section('footer')
