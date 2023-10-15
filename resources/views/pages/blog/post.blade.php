@extends('templates.admin')

@section('main')
<h1 class="mb-3 mt-4">{{ $post->title }}</h1>
<span class="badge bg-secondary mb-3 mt-3">{{ $post->created_at}}</span>
<h4 class="mt-3 mb-3">{{ $post->body }}</h4>
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2" role="group" aria-label="First group">
      <a href="{{ route('posts.page.update', ['post' => $post]) }}"><button type="button" class="btn btn-primary">Редактировать </button></a>
      <form action="{{ route('posts.delete', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="btn btn-danger">Удалить</button>
      </form>
    </div>
</div>
<div class="mt-3 mb-3">
    <h3 class="mt-3 mb-3">Комментарии</h3>
    <form action="{{ route('comments.create', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here"  name="body" id="floatingTextarea2" style="height: 70px"></textarea>
            <label for="floatingTextarea2"></label>
        </div>
        <button type="submit" class="btn btn-success mt-2" style="margin-left: 93%">Добавить</button>
    </form>
    <div class="comments mt-5">
    @foreach ($post->comments as $comment)
    <div class="card mt-3" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title"> Автор: {{ $comment->username }}</h5>
          <p class="card-text">{{ $comment->body }}</p>
        </div>
        <div style="margin-left: 10px; display:flex; justify-content:space-between;">
            <div  style="min-width: 200px; margin-top:10px; font-size:14px; color: grey;">{{ $comment->created_at }}</div>
            <form action="{{ route('comment.delete', ['comment' => $comment->id, 'post' => $post->id]) }}" method="POST" enctype="multipart/form-data" style="margin-bottom:10px;">
                @csrf
                <button type="submit" class="btn btn-dark">Удалить</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection
