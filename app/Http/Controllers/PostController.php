<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $post=new Post (request(['title', 'body']));
        $post->save();
        return redirect("posts");
    }

    public function show($id)
    {
        //dd($id);

        $post=POST::findOrFail($id);
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
