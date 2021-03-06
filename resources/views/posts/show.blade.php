@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        
        <body>
            <h1>Blog Site</h1>
            <div class = 'edit'>
                <a href='/posts/{{ $post->id }}/edit'>編集</a>
            </div>
            <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="button" onclick="return deletePost();">削除</button>
            </form>
            <div class = 'post'>
                <h2 class = 'title'>{{ $post->title }}</h2>
                <p class = 'body'>{{ $post->body }}</p>
                <p class = 'updated_at'>{{ $post->updated_at}}</p>
            </div>
            <div class = 'footer'>
                [<a href='/'>back</a>]
            </div>
            <script>
                function deletePost(){
                    'use strict';
                    if(confirm('削除すると元に戻せません。削除しますか？')){
                       document.getElementById('form_delete').submit();
                    }
                }   
            </script>
        </body>
    </html>
@endsection