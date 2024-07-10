<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
        //getPaginateByLimit()はPost.phpで定義したメゾットです。
    }
    
    /**
     * 
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Response post view
     */
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
      //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}
?>