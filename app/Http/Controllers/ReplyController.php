<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ReplyController extends Controller
{

    public static function getReplyCount($id){
        $replies = \DB::table('replies')->where('post_id', $id)->count();
        return $replies;
    }

    public function store(Request $request)
    {
      $request->validate([
        'post_id'=>'required',
        'user_id'=> 'required',
        'content' => 'required'
      ]);
      $reply = new Reply([
        'post_id' => $request->get('post_id'),
        'user_id'=> $request->get('user_id'),
        'content'=> $request->get('content')
      ]);
      $reply->save();
      $path = "/posts?postId=" . $request->get('post_id');
      return redirect($path)->with('success', 'Reply has been added');
    }


}
