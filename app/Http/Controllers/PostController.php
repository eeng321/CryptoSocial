<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $req)
    {
        $myId = null;
        if (!Auth::guest()) {
            $myId = DB::table('users')->where('id', Auth::user()->id)->value('id');
        }

        $posts = DB::table('posts')->latest()->paginate(15);
        return view('trades', ['myId' => $myId, 'posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = new Post([
            'author_id' => $request->get('author_id'),
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
        $post->save();
        return redirect('/posts')->with('success', 'Post has been added');
    }

}
