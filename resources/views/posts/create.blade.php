<html>

    <head>

    </head>

    <body>

        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class=field">
                <label class="label" for="title">Title</label>
                <div>
                    <input class="text" type="text" name="title" id="title", placeholder="Title">{{ old("title") }}</text>
                </div>
            </div>

            <div class=field">
                <label class="label" for="Excerpt">Body</label>
                <div>
                    <textarea class="textarea" type="text" name="body" id="body", placeholder="The body of your post">{{ old("body") }}</textarea>
                </div>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </body>

</html>

<!--
@if ($errors->has("excerpt"))
    <p class="help is-danger">{{$errors->first("excerpt")}}</p>
@endif
-->
