@extends('layouts.app')

@section('content')
<h1>Blog Name</h1>
<div class='post-create'>
    [<a href='/posts/create'>新規作成</a>]
</div>
<div class="posts">
    @foreach ($posts as $post)
        <div class="post">
            <h2 class='title'>
                <a href='/posts/{{ $post->id }}'>{{ $post->title }}</a>
            </h2>
            <p class='body'>{{ $post->body }}</p>
            <p>{{ $post->created_at }}</p>
            <a href='/categories/{{ $post->category->id }}'>{{ $post->category->name }}</a>
                    
            <form action='/posts/{{ $post->id }}' method='POST'>
                @csrf
                @method('DELETE')
                <input type='submit' value='削除' onClick="return delete_alert(event)" />
            </form>
        </div>
    @endforeach
</div>
<div class="paginate">
    {{ $posts->links() }}
</div>
<script>
    function delete_alert(e){
        if(window.confirm('本当に削除しますか？')){
                return true;
            } else {
                return false;
            }
    };
</script>
@endsection
