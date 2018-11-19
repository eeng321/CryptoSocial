<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{


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
