@extends('layouts.app')

@section('title', 'Users')

@section('navbar')

@section('content')
    @parent()
    <div class="container p-3">
            <form class="form-inline" method="get" action="#">
                <input class="form-control mr-sm-2 ml-auto" type="search" placeholder="User to search" aria-label="User to search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            
            <div class="card">
                
                <div class="card-body">
                    <h2 style="display:inline;">Yeetlers</h2>
                    {{-- Replace this with total users returned --}}
                    <span style="display:inline;">- 0 users returned</span>
                    
                    <hr>

                    <ul class="list-group">
                    {{-- This is where you display the rows of users --}}
                    @php
                        foreach($users as $user) {
                            echo "<a href='#' class='list-group-item d-flex list-group-item-action justify-content-between align-items-center'>";
                            echo $user->name;
                            echo "<span class='badge badge-primary badge-pill'>0 trades</span>";
                            echo "</a>";
                        }
                    @endphp
                    {{-- End of for-loop --}}
                    </ul>
                </div>
            </div>
    </div>
@endsection()

@section('footer')
