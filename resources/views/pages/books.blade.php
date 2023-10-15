@extends('templates.admin')
@section('main')
<div class="container">
    @foreach ($books as $book)
        @include('components.book', [
            'name' => $book->name,
            'description' => $book->description,
            'image_url' => $book->image_url,
            'author' => $book->author,
            'year' => $book->year,
            'total' => $book->total
        ])
    @endforeach
</div>

@endsection
