<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;


class PostController extends Controller
{
    /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
     public function index(Post $post)
     {
         // getPaginateByLimit()はどこで定義されているか？
         return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
     }
     
     public function show(Post $post)
     {
        return view('posts/show')->with(['post' => $post]); 
     }
     
     public function create(Category $category)
     {
         return view('posts/create')->with(['categories' => $category->get()]);
     }
     
     public function store(Post $post, PostRequest $request)
     {
        //  $request['post']には何の情報が入っているか？
         $input = $request['post'];
         
        //  fill()を実行ために必要な記述は何か？
         $post->fill($input)->save();
         
         return redirect('/posts/' . $post->id);
     }
     
     public function edit(Post $post)
     {
         return view('posts/edit')->with(['post' => $post]);
     }
     
     public function update(Post $post, PostRequest $request)
     {
         $input_post = $request['post'];
         $post->fill($input_post)->save();
         return redirect('/posts/' . $post->id);
     }
     
     public function delete(Post $post)
     {
         $post->delete();
         return redirect('/');
     }
}
