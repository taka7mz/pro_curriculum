@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        
        <body>
            <h1>記事編集</h1>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="content_title">
                        <h2>タイトル</h2>
                        <input type="text" name="post[title]"  value="{{ $post->title }}"/>
                        <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    <div class="content_body">
                        <h2>本文</h2>
                        <input type="text" name="post[body]" value="{{ $post->body }}" />
                        <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                    <input type="submit" value="更新" />
                </form>
            </div>
            <div class = 'footer'>
                <a href='/posts/{{ $post->id }}'>back</a>
            </div>
        </body>
    </html>
@endsection