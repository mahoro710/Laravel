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
            <input type="text" name="post[title]"  placeholder="タイトルを入力する" value="{{ old('post.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
       　
       　<div class="body">
       　　　<h2>本文</h2>
         　　<textarea name="post[body]" placeholder="本文を入力する" >{{ old('post.body') }}</textarea>
         　　<p class="title__error" style="color:red">{{ $errors->first('post.body') }}</p>
         </div> 
         
     
        <div class=category>
            <h2>カテゴリーを選択</h2>
            <select name='post[category_id]'>
                
                @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
          
          
          
         　　<input type="submit" value="保存"/>
　　　　</form>
       
       <div class="back">[<a href="/">back</a>]</div>
        
       
        
</body>
        
</html>