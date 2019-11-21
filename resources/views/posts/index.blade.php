<html>
    <head>
        <div>
            <h2>
                These are all the posts.
            </h2>
        </div>
    </head>
    <body>
        @foreach($posts as $post)
            <div>
            <a href="posts/{{$post->id}}">{{$post->title}}</a>
            <h5>{{$post->body}}</h5>
            </div>
        @endforeach
    </body>

</html>
