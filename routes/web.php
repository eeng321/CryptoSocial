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
    $myId = DB::table('users')->where('email', 'ssalarda@sfu.ca' )->value('id');
    $posts = DB::table('posts')->get();
    return view('trades', ['myId' => $myId, 'posts' => $posts]);
});

Route::get('userspage', 'SearchController@search');

//array to register many resource controllers when we add more in the future
Route::resources([
    'users' => 'UserController',
    'posts' => 'PostController'
]);

//user route
Route::resource('users', 'UserController')->only([
    'index', 'show'
]);

Route::resource('users', 'UserController')->except([
    'create', 'store', 'update', 'destroy'
]);

//post route
//Route::resource('posts', 'PostController');

/*
Route::auth();
Route::guest();
Route::check(); */

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

