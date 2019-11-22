

<html>
    <head>
        <h1>
            {{$post->title}}
        </h1>
    </head>
    <body>
        <div>
            <h3>
                {{$post->body}}
            </h3>
        </div>
        <div>
            {{$post->user->name}}
            <br>
            {{$post->created_at}}

        </div>
    </body>
</html>
