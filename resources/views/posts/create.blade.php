<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
</head>
<body>
    
       <h1>投稿を作成しよう</h1>
        <form action="/posts" method="POST">
           @csrf
            <div class="title"> 
            <h2>タイトル</h2>
            
            <input type="text" name="title" id="title" placeholder="タイトルを入力する" required>
        
       　
       　<div class="content">
       　<h2>本文</h2>
         <textarea name="content" id="content" type="text" placeholder="本文を入力する" required>
          </textarea>
          </div> 
          
           
        <input type="submit" value="保存"/>

           
       </form>
       <div class="back">[<a href="/">back</a>]</div>
        
       
        
        </body>
        
</html>