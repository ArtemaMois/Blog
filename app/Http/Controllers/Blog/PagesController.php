<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function showPosts()
    {
        $posts = Post::all();
        return view('pages.blog.posts', ['posts' => $posts]);
    }

    public function showPost(Post $post)
    {
        return view('pages.blog.post', ['post' => $post]);
    }

    public function createPostsForm()
    {
        return view('pages.blog.post_create');
    }

    public function updatePostsForm(Post $post){
        return view('pages.blog.post_edit', [
            'post' => $post
        ]);
    }
}
