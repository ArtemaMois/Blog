<?php

namespace App\Http\Controllers\Applications;

use App\Http\Controllers\Controller;
use App\Http\Requests\Articles\StoreRequest;
use App\Http\Requests\Articles\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;

class ArticlesController extends Controller
{
    public function create(StoreRequest $request)
    {
        $request->validate([
            'title' => ['required', 'min:1', 'max:10'],
            'body' => ['required', 'max:100', 'min:6'],
            'image' => ['required']
        ]);



        $imagePath = "/storage/{$request->file('image')->store('uploads')}";

        $article = new Article();
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->visible = $request->has('visible');
        $article->image = $imagePath;
        $article->save();
        return redirect()->route('article', [
            'article' => $article->id
        ]);
    }

    public function update(UpdateRequest $request, Article $article){

        if($request->hasFile('image')){
            $imagePath = "/storage/{$request->file('image')->store('uploads')}";
        }

        $article->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imagePath ?? $article->image,
            'visible' => $request->has('visible')
        ]);

        return redirect()->back();
    }

    public function delete(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('articles');
    }
}
