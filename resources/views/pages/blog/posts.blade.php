@extends('templates.admin')
@section('main')
<div class="container">
    @foreach ($posts as $post)
    @include('pages.blog.components.post', [
        'title' => $post->title,
        'body' => $post->body,
        'image_url' => $post->image_url
    ])
    @endforeach
</div>
@endsection
