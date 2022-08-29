<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css" <body>

<body>
    @foreach ($posts as $post)

        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</body>
