<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// first arg: The "URL Path" that the client is accessing
// second arg: What executes accordingly
Route::get('/', function () {
    $userCount = DB::table('users')->count();
    return view('home', ['userCount' => $userCount]);
});

Route::get('watchlist', function() {
    return view('watchlist');
});

Route::get('trades', function() {
    return view('trades');
});

Route::get('userspage', function() {
    $users = DB::table('users')->paginate(15);
    return view('userspage', ['users' => $users]);
});

Route::get('profile', function() {
    return view('profile');
});

//array to register many resource controllers when we add more in the future
Route::resources([
    'users' => 'UserController'
]);

//user route
Route::resource('users', 'UserController')->only([
    'index', 'show'
]);

Route::resource('users', 'UserController')->except([
    'create', 'store', 'update', 'destroy'
]);
/*
Route::auth();
Route::guest();
Route::check(); */
