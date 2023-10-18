<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>Title</h2>
                    <input type='text' name='post[title]' placeholder='タイトル' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>Body</h2>
                    <input type='text' name='post[body]' placeholder='本文' value="{{ $post->body }}">
                </div>
                <input type="submit" value="update">
            </form>
            <div class='footer'>
                <a href="/posts/{{ $post->id}}">戻る</a>
        </div>
    </body>
</html>