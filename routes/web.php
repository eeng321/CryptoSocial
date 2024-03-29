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
})->name('home');


Route::get('trades', function() {
    return view('trades');
});


//testing sharing user_data across views
// gets current auth()->user() shares for each view in $userData
Route::group(['middleware' => ['user_set']], function () {
    //routes that use ^ middleware defined in \App\Http\Kernel.php
    //user route
    Route::get('users/{id}/dashboard', 'UsersController@dashboard');
    Route::get('users/{id}/trades', 'UsersController@myTrades');
    Route::get('users/{id}/watchlist', 'UsersController@myWatchlist');
    Route::get('users/{id}/chat', 'UsersController@chat');

    Route::get('edit', 'UsersController@edit');
    Route::post('edit', 'UsersController@update');

    

    Route::resource('users', 'UsersController')->only([
        'index', 'show', 'myWatchlist', 'dashboard', 'myTrades', 'chat'
        ]);
   
});

Route::post('storeWallet', 'WalletController@store');

Route::post('follow', 'FollowerController@follow_unfollow');
Route::resource('posts', 'PostController')->only([
    'index' ,'destroy'
    ]);
Route::resource('posts', 'ReplyController')->only([
    'destroy'
]);



//array to register many resource controllers when we add more in the future
Route::resources([
    'users' => 'UsersController',
    'posts' => 'PostController',
    'replies' => 'ReplyController',

    'wallets' => 'WalletController',

    'trades' => 'TradesController',
    'tradereplies' => 'TradeReplyController'

]);


Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
