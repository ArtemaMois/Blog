<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreCommentRequest;
use App\Models\blog\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommentsController extends Controller
{
    public function create(StoreCommentRequest $request , Comment $comment, Post $post)
    {
        $comment->username = 'unauthorized';
        $comment->body = $request->input('body');
        $comment->post_id = $post->id;
        $comment->save();
        // dd($comment);
        return redirect()->back();

    }

    public function delete(Post $post, Comment $comment): RedirectResponse
    {
        $comment->delete();
        // dd($comment);
        return redirect()->route('post', ['post' => $post->id]);

    }
}
