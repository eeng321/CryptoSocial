<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index(Request $req) 
    {
        //check query
        $userList = null;
        $data['post'] = null;
        if(!empty($_GET['postId'])) {
            $id = $_GET['postId'];
            $post = \DB::table('posts')->where('id', $id)->first();
            $replies = \DB::table('replies')->where('post_id', $id)->oldest()->paginate(5);
            $data['post'] = $post;
            return view('trades', ['post' => $post, 'posts' => $replies]);
        } else{
          $posts = \DB::table('posts')->latest()->paginate(5);
          return view('trades', ['post' => null, 'posts' => $posts]);
        }
        
    }


    public function store(Request $request)
    {
      $request->validate([
        'author_id'=>'required',
        'title'=> 'required',
        'content' => 'required'
      ]);
      $post = new Post([
        'author_id' => $request->get('author_id'),
        'title'=> $request->get('title'),
        'content'=> $request->get('content')
      ]);
      $post->save();
      return redirect('/trades')->with('success', 'Post has been added');
    }
    

}
