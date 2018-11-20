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

//testing sharing user_data across views
// gets current auth()->user() shares for each view in $userData
Route::group(['middleware' => ['user_set']], function () {
    //routes that use ^ middleware defined in \App\Http\Kernel.php
    //user route
    Route::get('edit', 'UsersController@edit');
    Route::post('edit', 'UsersController@update');

    Route::resource('users', 'UsersController')->only([
        'index', 'show',
    ]);

});

Route::resource('posts', 'PostController')->only([
    'index'
    ]);

//array to register many resource controllers when we add more in the future
Route::resources([
    'users' => 'UsersController',
    'posts' => 'PostController',
    'replies' => 'ReplyController',
]);

// Route::resource('users', 'UserController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);
/*
Route::auth();
Route::guest();
Route::check(); */

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
