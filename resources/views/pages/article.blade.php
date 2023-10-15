@extends('templates.admin')

@section('main')
<h1>{{ $article->title }}</h1>
<span class="badge bg-secondary mb-3 mt-3">{{ $article->created_at}}</span>
<h2>{{ $article->body }}</h2>
<div class="btn-group">
    <a href="{{ route('articles.page.edit', ['article' => $article->id]) }}" class="btn btn-success">Edit</a>
    <form action="{{ route('articles.delete', ['article' => $article->id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<h2 class="mt-3 mb-3">Comments</h2>
    @foreach ($article->comments as $comment)
        <div class="card mt-3" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title">{{ $comment->username }}</h5>
              <p class="card-text">{{ $comment->body }}</p>

            </div>
        </div>
    @endforeach

@endsection
