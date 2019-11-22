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

            <div>
                <h6>
                    {{$post->user->name}}
                    <br>
                    {{$post->created_at}}
                </h6>
            </div>
            <br>
            <br>
        @endforeach
    </body>

</html>
@endsection
