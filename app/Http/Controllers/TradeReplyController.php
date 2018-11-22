<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TradeReply;

class TradeReplyController extends Controller
{

    public static function getReplies($id){
       // $replyList = null;
        $replies = \DB::table('trade_replies')->where('trade_id', $id)->oldest()->paginate(100);
        return $replies;
    }
    public static function getReplyCount($id){
      $replies = \DB::table('trade_replies')->where('trade_id', $id)->count();
      return $replies;
  }

    public function store(Request $request)
    {
      $request->validate([
        'trade_id'=>'required',
        'user_id'=> 'required',
        'content' => 'required'
      ]);
      $reply = new TradeReply([
        'trade_id' => $request->get('trade_id'),
        'user_id'=> $request->get('user_id'),
        'content'=> $request->get('content')
      ]);
      $reply->save();
      if($request->get('page') == 'users'){
        return redirect('/users/' .$request->get('user_id'))->with('success', 'Reply has been added');
      }else
        return redirect('/trades')->with('success', 'Reply has been added');
    }


}
