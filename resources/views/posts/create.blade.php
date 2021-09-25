<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    
    <body>
        <h1>Blog Site</h1>
        <form action="/posts" method="post">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" />
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="ここに入力"></textarea>
            </div>
            <input type="submit" value="新規登録" />
        </form>
        <div class = 'footer'>
            <a href='/'>back</a>
        </div>
    </body>
</html>