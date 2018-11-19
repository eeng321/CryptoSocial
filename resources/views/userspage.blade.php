@extends('layouts.app')

@section('title', 'Users')

@section('navbar')

@section('content')
    @parent()
    <div class="container p-3">
        <form class="form-inline" method="get" action="">
            <input class="form-control mr-sm-2 ml-auto" name="searchUser" type="search" placeholder="User to search" aria-label="User to search">
            <button class="btn btn-outline-success my-2 my-sm-0" name="searchUserBtn" type="submit">Search</button>
        </form>
            
        <div class="card">
                
            <div class="card-body">
                <h2 style="display:inline;">Yeetlers</h2>
                <span style="display:inline;">- {{$users->total()}} users returned</span>
                    
                <hr>

                <ul class="list-group">

                @foreach($users as $user) 
                    <a href={{url('users/'.$user->id)}} class='list-group-item d-flex list-group-item-action justify-content-between align-items-center'>
                        {{$user->name}}
                        <span class='badge badge-primary badge-pill'>0 trades</span>
                    </a>
                @endforeach

                </ul>

                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection()

@section('footer')