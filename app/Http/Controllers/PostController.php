<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index($sort)
    {
        switch ($sort){
            case 1:
                $posts = Post::orderBy("title", "ASC")->get();
                break;
            case 2:
                $posts = Post::orderBy("title", "DESC")->get();
                break;
            case 3:
                $posts = Post::orderBy("created_at", "ASC")->get();
                break;
            case 4:
                $posts = Post::orderBy("created_at", "DESC")->get();
                break;
            /* case 5:
                $posts = Post::get();
                dd($posts->sortBy(""));
                break;
            case 6:
                $posts = Post::get();
            */
            default:
                $posts = Post::get();


        }
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
        if(request()->filePath) {
            $request->filePath->store('public/userUploads');
            $post->filePath = request("filePath")->hashName();
        }
//        $post->filePath = Storage::disk('public')
//            ->put('userUploads/' . $request->filePath->getClientOriginalName(), $request->filePath);

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
