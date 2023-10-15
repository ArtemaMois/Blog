@extends('templates.admin')

@section('main')
<h1>{{ $book->name }}</h1>
<span class="badge bg-secondary mb-3 mt-3">{{ $book->author}}</span>
<span class="badge bg-secondary mb-3 mt-3">{{ $book->year}}</span>
<h2>{{ $book->description }}</h2>
<a href="{{ route('books.edit', ['book' => $book->id]) }}" class="btn btn-success">Edit</a>
@endsection
