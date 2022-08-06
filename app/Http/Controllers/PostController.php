<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    //
    public function index () {

        $posts = Post::paginate(20);
        return view('post.index' , [
            'posts'=> $posts
        ]);
    }

    public function store ( Request $request) {

        $this->validate($request , [
            'body' => 'required',
        ]);
        
        Post::create([
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts');
    }
}
