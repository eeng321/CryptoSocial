<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Follower;

class FollowerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function follow_unfollow(Request $req)
    {
        $req->validate([
            'user_id'=> 'required',
            'user_following_id'=> 'required',
            'action' => 'required',
        ]);
        $myId = $req->input("user_id");
        $followId = $req->input("user_following_id");
        $action = $req->input("action");
        if ($action === 'follow')
        {
            $follow = new Follower([
                'user_id' => $myId,
                'user_following_id'=> $followId,
            ]);
            $follow->save();
        } elseif ($action === 'unfollow') {
            $whereCond = ['user_id' => $myId, 'user_following_id' => $followId];
            $removedItems = \DB::table('followers')->where($whereCond)->delete();
        }
   }

   public function test_follow(Request $req) 
   {
    $myId = Auth::user()->id;
    $followId = 2;
    $action = 'follow';
    if ($action === 'follow')
    {
        $follow = new Follow([
            'user_id' => $myId,
            'user_following_id'=> $followId,
        ]);
        $follow->save();
    }
   }
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

    public static function countFollowers($id){
        $count = \DB::table('followers')->where(['user_following_id' => $id])->count();
        return $count;
    }

    public static function countFollowing($id){
        $count = \DB::table('followers')->where( ['user_id' => $id])->count();
        return $count;
    }

}
