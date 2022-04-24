
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        
    </head>
    <body>
        <h1>ブログ</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                     <a href="">{{$post->name}}</a>
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
  
   <div class="back">[<a href="/">back</a>]</div>

    </body>
</html>