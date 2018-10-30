@extends('layouts.app')

@section('title', 'Users')

@section('navbar')    

@section('content')
    @parent()
    <div class="container p-3">
        <form class="form-inline ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search User">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
@endsection()

@section('footer')