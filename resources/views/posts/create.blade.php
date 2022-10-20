@extends('layouts.app')

@section('content')
<h1>Create Blog</h1>
<form action='/posts' method='POST'>
    @csrf
    <div class='title'>
        <h2>Title</h2>
        <input type='text' name='post[title]' placeholder='タイトル' value='{{ old('post.title') }}' />
        
        <!--$errorsはどこのファイルで定義されている？-->
        <p class='title_error' style='color:red'>{{ $errors->first('post.title') }}</p>
        
    </div>
    <div class='body'>
        <h2>Body</h2>
        <textarea name='post[body]' placeholder='今日は疲れた'>{{ old('post.body') }}</textarea>
        <p class='body_error' style='color:red'>{{ $errors->first('post.body') }}</p>
    </div>
    <div class='category'>
        <h2>Category</h2>
        <select name='post[category_id]'>
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <input type='submit' value='保存' />
</form>
<div class='back'>
    [<a href='/'>back</a>]
</div>
@endsection
