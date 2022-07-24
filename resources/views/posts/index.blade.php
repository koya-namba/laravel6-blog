<!DOCTYPE html>
<html lang="{{ str_replace('-', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
    </head>
    <body>
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
                    
                    <form action='/posts/{{ $post->id }}' method='POST'>
                        @csrf
                        @method('DELETE')
                        <input type='submit' name='delete' value='削除' onClick="delete_alert(event);return false;" />
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
        <script>
            function delete_alert(e){
                if(!window.confirm('本当に削除しますか？')){
                    window.alert('キャンセルされました'); 
                    return false;
                    }
                document.deleteform.submit();
            };

        </script>
    </body>
</html>