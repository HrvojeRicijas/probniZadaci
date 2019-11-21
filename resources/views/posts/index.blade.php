<html>
    <head>
        <div>
            <h1>
                These are all the posts.
            </h1>
        </div>
    </head>
    <body>
        @foreach($posts as $post)
            <div>
            <a style="font-size: 40px" href="posts/{{$post->id}}">{{$post->title}}</a>
            <h4>{{$post->body}}</h4>
            </div>

            <div>
                <h6>
                    author placeholder <br>
                    {{$post->created_at}}
                </h6>
            </div>
            <br>
            <br>
        @endforeach
    </body>

</html>
