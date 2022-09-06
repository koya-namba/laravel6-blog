@extends('layouts.app')

@section('content')
<h1 class='title'>
    {{ $post->title }}
</h1>
<div class='content'>
    <div class='content_post'>
        <h3>本文</h3>
        <p>{{ $post->body }}</p>
    </div>
</div>
<div class='category'>
    <a href='/categories/{{ $post->category->id }}'>{{ $post->category->name }}</a>
</div>
<div class='update'>
    [<a href='/posts/{{ $post->id }}/edit'>編集</a>]
</div>
<div class='footer'>
    [<a href='/'>戻る</a>]
</div>
@endsection
