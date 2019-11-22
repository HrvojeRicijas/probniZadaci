

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
            <img src="storage/app/userUploads/SFurlM42FKMXp7QyARXw95qdqbNijXRwQ6IhxwjR.jpeg" alt="image">
            {{$post->user->name}}
            <br>
            {{$post->created_at}}

        </div>
    </body>
</html>
