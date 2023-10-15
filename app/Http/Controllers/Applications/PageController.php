<?php

namespace App\Http\Controllers\Applications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class PageController extends Controller
{



    public function home()
    {
        return view('pages.home');
    }
    public function articles(){
        $articles = Article::where('visible', true)
        ->withTrashed()
        ->get();
        // dd($articles);
        return view('pages.articles', ['articles' => $articles]);
    }

    public function showArticle(Article $article){
        return view('pages.article', [
            'article' => $article,
        ]);
    }

    public function createArticleForm()
    {
        return view('pages.article_create');
    }

    public function updateArticleForm(Article $article){
        return view('pages.article_edit', [
            'article' => $article
        ]);
    }

}
