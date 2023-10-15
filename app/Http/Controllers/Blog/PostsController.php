<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StorePostRequest;
use App\Http\Requests\Blog\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{



    public function create(StorePostRequest $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('image_url')){
            $image_urlPath = '/storage/' . $request->file('image_url')->store('/uploads');
        }
        $post->image_url = $image_urlPath ?? NULL;
        $post->save();

        return redirect()->route('post', ['post' => $post->id]);
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        if ($request->hasfile('image_url')) {
            $image_urlPath = '/storage/' . $request->file('image_url')->store('/uploads');
        }

        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image_url' => $image_urlPath ?? NULL
        ]);

        return redirect()->route('post', ['post' => $post->id]);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('posts');
    }
}
