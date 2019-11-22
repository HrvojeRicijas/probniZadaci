<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();
        return view("posts.index", ["posts"=>$posts]);
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        request()->validate([
            "title"=>"required"
        ]);
        $post=new Post(request(['title', 'body']));
        $post->user_id=Auth::id();
        $post->save();
        return redirect("posts");
    }

    public function show($id)
    {
        //dd($id);

        $post = Post::findOrFail($id);
        return view("posts.post", ["post"=>$post]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
