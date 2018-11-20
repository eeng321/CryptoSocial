<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Follow;

class FollowController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    
    //check if following
    public static function following($myId, $followingId){
        $matchThese = ['user_id' => $myId, 'user_following_id' => $followingId];
        $count = \DB::table('followers')->where($matchThese)->count();
        if ($count > 0){
            return true;
        }else{
            return false;
        }
    }
}
