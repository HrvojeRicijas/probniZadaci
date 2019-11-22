@extends("layouts.app")

@section("content")
<html>
    <head>
        <div>
            <h1>
                These are all the posts.
            </h1>
        </div>
    </head>
    <body style="text-align:center ">
        @foreach($posts as $post)
            <div >
            <a style="font-size: 40px" href="posts/{{$post->id}}">{{$post->title}}</a>
            <h4>{{$post->body}}</h4>
            </div>

            <img src="/storage/userUploads/{{$post->filePath}}" alt="", height="50" widht="50">

            <div>
                <h6>
                    {{$post->user->name}}
                    <br>
                    {{$post->created_at->toRfc850String()}}
                </h6>
            </div>
            <br>
            <br>
        @endforeach
    </body>

</html>
@endsection
