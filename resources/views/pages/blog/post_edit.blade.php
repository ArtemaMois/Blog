@extends('templates.admin')
@section('main')
<div class="row mt-4">
    <h3 class="mb-2">Update "{{ $post->title }}" article</h3>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" value="{{ old('title', $post->title) }}" class="form-control @error('title') is-invalid @enderror" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('title')
          <div id="validationServer03Feedback" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="exampleInputPassword1">{{ old('body', $post->body) }}</textarea>
          @error('body')
          <div id="validationServer03Feedback" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <img class="d-block mb-3" height="100" src="{{ $post->image_url }}" alt="">
            <label for="exampleInputEmail1" class="form-label">Фото</label>
            <input type="file" class="form-control @error('image_url') is-invalid @enderror" name="image_url" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('image_url')
            <div id="validationServer03Feedback" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
</div>
@endsection
