@extends("layouts.app")

@section ("content")
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
            @if($post->filePath)
            <img src="/storage/userUploads/{{$post->filePath}}" alt="image">
            @endif
            {{$post->user->name}}
            <br>
            {{$post->created_at}}

        </div>
    </body>
</html>
@endsection
