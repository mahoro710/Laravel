<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
            
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        　　　
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
    　　　 @csrf
   　　　　 @method('DELETE')
    
         <p> <button type="submit" onclick="return deletePost(this);">delete</button></p>
　　　　</form>

　　　　　<div class="footer">
            <a href="/">戻る</a>
        </div>
        
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
       
        <script>function deletePost(e){
            'use strict';
            if (confirm('本当に削除しますか？')){
          
            document.getElementById('form_delete').submit();
              
            }
        }
            
        </script>
    </body>
</html>